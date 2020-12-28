<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$linkAcceso = Yii::$app->urlManager->createAbsoluteUrl(['site/oauth2', 'token' => $modelAlumno->token]);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <title></title>
        <meta http-equiv="Content-Type"
              content="text/html; charset=utf-8" />
        <style type="text/css">
            body, .maintable { height:100% !important; width:100% !important; margin:0; padding:0; }
            img, a img { border:0; outline:none; text-decoration:none; }
            .imagefix { display:block; }
            p {margin-top:0; margin-right:0; margin-left:0; padding:0;}
            .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;}
            img{-ms-interpolation-mode: bicubic;}
            body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
        </style>
        <style type="text/css">
            @media only screen and (max-width: 626px) {
                .rtable { width: 100% !important; table-layout: fixed; }
                .rtable tr { height:auto !important; display: block; }
                .contenttd { max-width: 100% !important; display: block; }
                .contenttd:after {content: ""; display: table; clear: both; }
                .hiddentds { display: none; }
                .imgtable, .imgtable table {max-width: 100% !important; height: auto; float: none; margin: 0 auto; }
                .imgtable.btnset td {display: inline-block;}
                .imgtable img {width: 100%; height: auto; display: block; }
                table{ float: none; table-layout: fixed; }
            }
        </style>
        <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
    </head>
    <body
        style="overflow: auto; padding:0; margin:0; font-size: 12px; font-family: arial, helvetica, sans-serif; cursor:auto; background-color:#444545">
        <table cellspacing="0" cellpadding="0" width="100%"
               bgcolor="#444545">
            <tr>
                <td style="FONT-SIZE: 0px; HEIGHT: 20px; LINE-HEIGHT: 0"></td>
            </tr>
            <tr>
                <td valign="top">
                    <table class="rtable" style="WIDTH: 626px; MARGIN: 0px auto"
                           cellspacing="0" cellpadding="0" width="626" align="center"
                           border="0">
                        <tr>
                            <td class="contenttd"
                                style="BORDER-TOP: #f6b21d 5px solid; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: #feffff">
                                <table style="WIDTH: 100%" cellspacing="0" cellpadding="0"
                                       align="left">
                                    <tr class="hiddentds">
                                        <td
                                            style="FONT-SIZE: 0px; HEIGHT: 0px; WIDTH: 626px; LINE-HEIGHT: 0; mso-line-height-rule: exactly">
                                        </td>
                                    </tr>
                                    <tr style="HEIGHT: 10px">
                                        <th class="contenttd"
                                            style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; VERTICAL-ALIGN: top; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 20px; TEXT-ALIGN: left; PADDING-TOP: 20px; PADDING-LEFT: 15px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: transparent">
                                            <!--[if gte mso 12]>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td align="center">
                                            <![endif]-->
                                            <table class="imgtable" style="MARGIN: 0px auto" cellspacing="0"
                                                   cellpadding="0" align="center" border="0">
                                                <tr>
                                                    <td
                                                        style="PADDING-BOTTOM: 2px; PADDING-TOP: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px"
                                                        align="center">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td
                                                                    style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent">
                                                                    <img
                                                                        style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; DISPLAY: block"
                                                                        alt="" src="https://apps.uleam.edu.ec/danu/evadanu_2020_1/mail/cseu/Image_1.jpg" width="576"
                                                                        height="230" hspace="0" vspace="0" /></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if gte mso 12]>
                                                </td></tr></table>
                                            <![endif]--></th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="contenttd"
                                style="BORDER-TOP: #f6b21d 5px solid; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: #feffff">
                                <table style="WIDTH: 100%" cellspacing="0" cellpadding="0"
                                       align="left">
                                    <tr class="hiddentds">
                                        <td
                                            style="FONT-SIZE: 0px; HEIGHT: 0px; WIDTH: 104px; LINE-HEIGHT: 0; mso-line-height-rule: exactly">
                                        </td>
                                        <td
                                            style="FONT-SIZE: 0px; HEIGHT: 0px; WIDTH: 522px; LINE-HEIGHT: 0; mso-line-height-rule: exactly">
                                        </td>
                                    </tr>
                                    <tr style="HEIGHT: 10px">
                                        <th class="contenttd"
                                            style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; VERTICAL-ALIGN: top; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 5px; TEXT-ALIGN: left; PADDING-TOP: 5px; PADDING-LEFT: 15px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: transparent">
                                            <!--[if gte mso 12]>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td align="center">
                                            <![endif]-->
                                            <table class="imgtable" style="MARGIN: 0px auto" cellspacing="0"
                                                   cellpadding="0" align="center" border="0">
                                                <tr>
                                                    <td
                                                        style="PADDING-BOTTOM: 2px; PADDING-TOP: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px"
                                                        align="center">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td
                                                                    style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent">
                                                                    <img
                                                                        style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; DISPLAY: block"
                                                                        alt="" src="https://apps.uleam.edu.ec/danu/evadanu_2020_1/mail/cseu/Image_2.png" width="70" height="70"
                                                                        hspace="0" vspace="0" /></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if gte mso 12]>
                                                </td></tr></table>
                                            <![endif]--></th>
                                        <th class="contenttd"
                                            style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; VERTICAL-ALIGN: middle; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 5px; TEXT-ALIGN: left; PADDING-TOP: 5px; PADDING-LEFT: 15px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: transparent">
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 24px; FONT-FAMILY: geneve, arial, helvetica, sans-serif; COLOR: #2d2d2d; MARGIN-TOP: 0px; LINE-HEIGHT: 36px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="center"><strong>Universidad Laica Eloy Alfaro de
                                                    Manab&iacute;</strong><br />
                                                Dirección de Admisión y Nivelación</p>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="contenttd"
                                style="BORDER-TOP: #f6b21d 5px solid; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: #feffff">
                                <table style="WIDTH: 100%" cellspacing="0" cellpadding="0"
                                       align="left">
                                    <tr class="hiddentds">
                                        <td
                                            style="FONT-SIZE: 0px; HEIGHT: 0px; WIDTH: 626px; LINE-HEIGHT: 0; mso-line-height-rule: exactly">
                                        </td>
                                    </tr>
                                    <tr style="HEIGHT: 20px">
                                        <th class="contenttd"
                                            style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; VERTICAL-ALIGN: top; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 20px; TEXT-ALIGN: left; PADDING-TOP: 20px; PADDING-LEFT: 15px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: transparent">
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 24px; FONT-FAMILY: geneve, arial, helvetica, sans-serif; COLOR: #2d2d2d; MARGIN-TOP: 0px; LINE-HEIGHT: 36px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="left">Estimado(a):</p>
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 24px; FONT-FAMILY: geneve, arial, helvetica, sans-serif; COLOR: #2d2d2d; MARGIN-TOP: 0px; LINE-HEIGHT: 36px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="center"><?php echo $modelAlumno->nombreCompleto ?></p>
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 14px; FONT-FAMILY: arial, helvetica, sans-serif; COLOR: #575757; MARGIN-TOP: 0px; LINE-HEIGHT: 21px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="left">Para poder realizar las encuestas de sus asignaturas
                                                de clic en el siguiente bot&oacute;n.</p>
                                            <!--[if gte mso 12]>
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td align="center">
                                            <![endif]-->
                                            <table class="imgtable btnset"
                                                   style="TEXT-ALIGN: center; MARGIN: 0px auto" cellspacing="0"
                                                   cellpadding="0" border="0">
                                                <tr>
                                                    <td class="contenttd"
                                                        style="VERTICAL-ALIGN: middle; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px">
                                                        <!--
                                                            <a href="EnlaceToken"><img title="" border="none"
                                                        alt="Acceder a SEU" src="./Correo_SEU_files/Image_3.png" /></a>
                                                        -->



                                                        <?php
                                                        echo Html::a(Html::img('https://apps.uleam.edu.ec/danu/evadanu_2020_1/mail/cseu/Image_3.png', ["border" => "none"]),$linkAcceso)
                                                        ?>



                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if gte mso 12]>
                                                </td></tr></table>
                                            <![endif]-->
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 14px; FONT-FAMILY: arial, helvetica, sans-serif; COLOR: #575757; MARGIN-TOP: 0px; LINE-HEIGHT: 21px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="left">&nbsp;</p>
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 14px; FONT-FAMILY: arial, helvetica, sans-serif; COLOR: #575757; MARGIN-TOP: 0px; LINE-HEIGHT: 21px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="left">Si al dar clic no funciona copie y acceda al
                                                siguiente enlace.</p>
                                            
                                            <?= Html::a(Html::encode($linkAcceso), $linkAcceso) ?>
                                            
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 14px; FONT-FAMILY: arial, helvetica, sans-serif; COLOR: #575757; MARGIN-TOP: 0px; LINE-HEIGHT: 21px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="left">&nbsp;</p>
                                            <p
                                                style="MARGIN-BOTTOM: 1em; FONT-SIZE: 14px; FONT-FAMILY: arial, helvetica, sans-serif; COLOR: #575757; MARGIN-TOP: 0px; LINE-HEIGHT: 21px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly"
                                                align="left"><strong>Saludos cordiales.<br />
                                                    </strong></p>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="contenttd"
                                style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: transparent">
                                <table style="WIDTH: 100%" cellspacing="0" cellpadding="0"
                                       align="left">
                                    <tr class="hiddentds">
                                        <td
                                            style="FONT-SIZE: 0px; HEIGHT: 0px; WIDTH: 600px; LINE-HEIGHT: 0; mso-line-height-rule: exactly">
                                        </td>
                                    </tr>
                                    <tr style="HEIGHT: 20px !important">
                                        <th class="contenttd"
                                            style="BORDER-TOP: medium none; HEIGHT: 20px; BORDER-RIGHT: medium none; VERTICAL-ALIGN: top; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 0px; TEXT-ALIGN: left; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: transparent">
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="FONT-SIZE: 0px; HEIGHT: 8px; LINE-HEIGHT: 0">&nbsp;</td>
            </tr>
        </table>
        <!-- Created with MailStyler 2.0.0.310 -->
    </body>
</html>

