<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Clever - Education &amp; Courses Template | Contact</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>



    <!-- ##### Google Maps ##### -->
    <div class="map-area container">
        <div id="googleMap">
            <div style="overflow:hidden;width: 1200px;position: relative;"><iframe width="1200" height="440" src="https://maps.google.com/maps?width=800&amp;height=440&amp;hl=en&amp;q=41.352630%2C%2069.299575+(yunusobod%20xtb)&amp;ie=UTF8&amp;t=p&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/it/">embedgooglemaps IT</a> & <a href="https://iamsterdamcard.it">i amsterdamcard it</a></small></div>
                <style>
                    #gmap_canvas img {
                        max-width: none !important;
                        background: none !important
                    }
                </style>
            </div><br />
        </div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area" style="padding-bottom: 5%;">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50 mb-100">
                        <h4>Contact Info</h4>
                        <ul class="contact-list">
                            <li>
                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Ish Vaqti</h6>
                                <h6>9:00 AM - 18:00 PM</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone" aria-hidden="true"></i> Number</h6>
                                <h6>+99899 362-11-25</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                                <h6>kamol_ikramov@mail.ru</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                                <h6>Toshkent sh. Yunusobod tumani</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form">
                        <h4>Get In Touch</h4>

                        <form action="#" method="post">
                            <div class="row">
                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'name')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'email')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'subject') ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                                    </div>
                                </div>

                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]) ?>

                                <div class="col-12">
                                    <button class="btn clever-btn w-100">Post A Comment</button>
                                </div>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->

    <!-- Google Maps -->
    <script src="https://maps.google.com/maps?width=1200&amp;height=440&amp;hl=en&amp;q=41.352630%2C%2069.299575+(yunusobod%20xtb)&amp;ie=UTF8&amp;t=p&amp;z=10&amp;iwloc=B&amp;output=embed"></script>
    <script src="js/google-map/map-active.js"></script>
</body>

</html>