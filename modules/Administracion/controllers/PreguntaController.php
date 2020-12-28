<?php

namespace app\modules\Administracion\controllers;

use Yii;
use app\models\Pregunta;
use app\models\PreguntaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PreguntaController implementación de las acciones CRUD en base al modelo Pregunta model.
 */
class PreguntaController extends Controller
{
    /**
     * @inheritdoc
     */
 public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'ver', 'crear', 'modificar','eliminar'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

/**
* Lista todo el modelo Pregunta.
* @return mixed
*/
    public function actionIndex()
    {
        $searchModel = new PreguntaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

/**
* Muestra un modelo Pregunta basado en su valor de clave principal.
* @param integer $id
* @return mixed
*/
    public function actionVer($id)
    {
        return $this->render('ver', [
            'model' => $this->findModel($id),
        ]);
    }

/**
* Crea un nuevo modelo Pregunta.
* Si la creación se realiza correctamente, el navegador será redirigido a la página especificada.
* @return mixed
*/
    public function actionCrear()
    {
        $model = new Pregunta();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            Yii::$app->session->setFlash('success', \app\helpers\HelperPersonalizado::MENSAJE_EXITO);
            return $this->redirect(['ver', 'id' => $model->id]);
        } else {
            return $this->render('crear', [
                'model' => $model,
            ]);
        }
    }

/**
* Actualiza el modelo Pregunta basado en su valor de clave principal.
* Si la actualización se realiza correctamente, el navegador será redirigido a la página especificada.
* @param integer $id
* @return mixed
*/
    public function actionModificar($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['ver', 'id' => $model->id]);
        } else {
            return $this->render('modificar', [
                'model' => $model,
            ]);
        }
    }

/**
* Elimina el modelo Pregunta basado en su valor de clave principal.
* Si la eliminación se realiza correctamente, el navegador será redirigido a lapágina especificada.
* @param integer $id
* @return mixed
*/
    public function actionEliminar($id)
    {
        try {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
            throw new \Exception('Error!');
        } catch (\Exception $e) {
            Yii::$app->session->setFlash('error', \app\helpers\HelperPersonalizado::MENSAJE_ERROR_ELIMINAR);
            return $this->redirect(['index']);
        }
    }

/**
* Busca el modelo Pregunta basado en su valor de clave principal.
* Si no se encuentra el modelo, se lanzará una excepción de 404 HTTP.
* @param integer $id
* @return Pregunta retorna el modelo cargado
* @throws NotFoundHttpException Excepción  Si el modelo no se puede encontrar
*/
    protected function findModel($id)
    {
        if (($model = Pregunta::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('La página solicitada no existe.');
        }
    }
}
