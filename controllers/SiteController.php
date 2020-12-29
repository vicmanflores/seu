<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\helpers\HelperPersonalizado;

class SiteController extends Controller {

    public function actionCorreo() {

        try {
            Yii::$app->mailer->compose()
                    ->setFrom('seu@uleam.edu.ec')
                    ->setTo('e1312687856@live.uleam.edu.ec')
                    ->setSubject('Message subject')
                    ->setTextBody('Plain text content')
                    ->setHtmlBody('<b>HTML SEU </b>')
                    ->send();
            echo "enviado";
        } catch (Exception $ex) {
            print_r($ex);
        }
    }

    public function actionSalir() {
        $variableSessionAlumno = Yii::$app->session;
        $variableSessionAlumno['datos'] = [
            'identificacion' => "",
            'idAlumno' => ""
        ];

        Yii::$app->user->logout();

        return $this->redirect(['index']);
    }

    public function actionOauth2($token) {
        /*
          print_r($token);
          die(); */

        $variableSessionAlumno = Yii::$app->session;
        $variableSessionAlumno['datos'] = [
            'identificacion' => "",
            'idAlumno' => ""
        ];

        if (($alumno = \app\models\Alumno::find()->where(['token' => $token])->one()) !== null) {
            $variableSessionAlumno = Yii::$app->session;
            $variableSessionAlumno['datos'] = [
                'identificacion' => $alumno->identificacion,
                'idAlumno' => $alumno->id
            ];
            return $this->redirect(['asignatura']);
        } else {

            Yii::$app->session->setFlash("error", "Enlace no válido");
            return $this->redirect(['index']);
        }
    }

    public function actionIndex() {

        //print_r(HelperPersonalizado::GenerarClave("salsatomate2020"));    

        /*
          if (!empty(HelperPersonalizado::CedulaAlumno()) && HelperPersonalizado::IdAlumno() > 0) {
          return $this->redirect(['asignatura']);
          } */



        $variableSessionAlumno = Yii::$app->session;
        $variableSessionAlumno['datos'] = [
            'identificacion' => "",
            'idAlumno' => ""
        ];


        $this->layout = 'main-login';
        $model = new \app\models\FrmIngresarCedula();
        if ($model->load(Yii::$app->request->post())) {
            if (($alumno = \app\models\Alumno::find()->where(['identificacion' => $model->cedula, 'estado' => 1])->one()) !== null) {

                $variableSessionAlumno = Yii::$app->session;
                $variableSessionAlumno['datos'] = [
                    'identificacion' => $alumno->identificacion,
                    'idAlumno' => 0
                ];

                if (empty($alumno->token)) {
                    $alumno->token = HelperPersonalizado::GenerarToken($alumno->identificacion);
                    $alumno->update();
                    return $this->redirect(['enviar-acceso', 'id' => $alumno->id]);
                } else {
                    return $this->render('_frmReenviarAcceso', [
                                'alumno' => $alumno,
                    ]);
                }
            } else {
                //Yii::$app->session->setFlash("success", "Proceso realizado con exitó!");
                Yii::$app->session->setFlash("error", "Identificación no encontrada, o usuario no habilitado");
            }
        }
        return $this->render('frmCedula', [
                    'model' => $model,
        ]);
    }

    public function actionEnviarAcceso($id) {


        $modelAlumno = \app\models\Alumno::findOne($id);
        Yii::$app->mailer->compose(['html' => '_linkAcceso',], [
                    'modelAlumno' => $modelAlumno
                ])
                ->setFrom([\Yii::$app->params['supportEmail'] => 'SEU - Sistema de Encustas Universitario'])
                ->setTo($modelAlumno->email_institucional)
                ->setSubject('Acceder a EvaDANU 2020-1')
                ->send();
        //Yii::$app->session->setFlash("info", "Se ha enviado un enlace de acceso a su correo");
        Yii::$app->session->setFlash("info", "Se ha enviado un enlace de acceso a su correo institucional <a  href='https://portal.office.com'> Abrir Correo <i class='icon fa fa-external-link'></i></a>");



        return $this->redirect(['site/index']);
    }

    public function actionNuevoToken() {
        if (!empty(HelperPersonalizado::CedulaAlumno())) {
            $alumno = \app\models\Alumno::find()->where(['identificacion' => HelperPersonalizado::CedulaAlumno()])->one();
            $alumno->token = HelperPersonalizado::GenerarToken($alumno->identificacion);
            $alumno->update();
            return $this->redirect(['enviar-acceso', 'id' => $alumno->id]);
        }
        return $this->redirect(['index']);
    }

    public function actionAsignatura() {

        if (empty(HelperPersonalizado::CedulaAlumno()) && HelperPersonalizado::IdAlumno() == 0) {
            return $this->redirect(['index']);
        }

        $alumno = \app\models\Alumno::findOne(HelperPersonalizado::IdAlumno());
        $searchModel = new \app\models\AlumnoAsignaturaSearch();
        $searchModel->alumno_id = $alumno->id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('alumnoAsignatura', [
                    'alumno' => $alumno,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionEncuesta($id) {



        if (empty(HelperPersonalizado::CedulaAlumno()) && HelperPersonalizado::IdAlumno() == 0) {
            return $this->redirect(['index']);
        }

        $preguntas = \app\models\Pregunta::find()->where(['estado' => 1])->all();

        $modelRespuesta = new \app\models\ModeloRespuesta();
        // $modelRespuesta->ListaPregunta(100);

        if ($modelRespuesta->load(Yii::$app->request->post())) {

            foreach ($preguntas as $pregunta) {
                // $modelRespuesta = new \app\models\ModeloRespuesta();
                $encuesta = new \app\models\Encuesta();
                $encuesta->pregunta_id = $pregunta->id;
                $encuesta->respuesta = $_POST['ModeloRespuesta']['respuesta' . $pregunta->id];

                $alumnoAsignatura = \app\models\AlumnoAsignatura::find()->where(['profesor_asignatura_id' => $id, 'alumno_id' => HelperPersonalizado::IdAlumno()])->one();
                $alumnoAsignatura->encuestada = 1;
                $alumnoAsignatura->update();

                //print_r($alumnoAsignatura->getErrors());
                //die();

                $encuesta->alumno_id = HelperPersonalizado::IdAlumno();
                $encuesta->profesor_id = $alumnoAsignatura->profesorAsignatura->profesor_id;
                $encuesta->asignatura_id = $alumnoAsignatura->profesorAsignatura->asignatura_id;

                $encuesta->periodo_id = $pregunta->periodo->id;

                $encuesta->carrera_id = $alumnoAsignatura->alumno->carrera_id;

                $encuesta->save();

                // print_r($encuesta->getErrors());
                //echo $respuesta;
            }


            return $this->redirect(['asignatura']);
            //print_r($encuesta);
            //print_r($_POST['ModeloRespuesta']);
        }


        //die();

        if (($alumnoAsignatura = \app\models\AlumnoAsignatura::find()
                        ->where(['profesor_asignatura_id' => $id, 'alumno_id' => HelperPersonalizado::IdAlumno()])->one()) !== null) {

            if ($alumnoAsignatura->encuestada == 1) {
                return $this->redirect(['asignatura']);
            }

            return $this->render('frmEncuesta', [
                        'alumnoAsignatura' => $alumnoAsignatura,
                        'preguntas' => $preguntas,
                        'modelRespuesta' => $modelRespuesta,
            ]);
        } else {
            return $this->redirect(['asignatura']);
        }
    }

    public function actionVerEncuesta($pid, $aid) {

        if (empty(HelperPersonalizado::CedulaAlumno()) && HelperPersonalizado::IdAlumno() == 0) {
            return $this->redirect(['index']);
        }


        if (($encuestaLlena = \app\models\Encuesta::find()
                        ->where([
                            'profesor_id' => $pid,
                            'asignatura_id' => $aid,
                            'alumno_id' => HelperPersonalizado::IdAlumno(),
                        ])->all()) !== null) {

            return $this->render('frmEncuestaLlena', [
                        'encuestaLlena' => $encuestaLlena,
            ]);
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
            return $this->redirect(['/Administracion/']);
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
