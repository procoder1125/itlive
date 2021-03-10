


<?php

use nenad\passwordStrength\PasswordInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\models\Kurslar;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,100&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Kursga yozilish</title>
</head>

<body>


    <!-- ==========  Header _starting  ========== -->

    <header class='header' style="height:15% !important;">
        <div class="header_menu" style="height:15% !important;">

            <div class="container">
                <div class="row  justify-content-between align-items-center">
                    <div class="col-lg-12 ">
                        <nav class="navbar navbar-light navbar-expand-lg mt-4">
                            <a class="navbar-brand" href="<?=Url::to(['/'])?>"><img src="/images/IT Live full white.svg" alt="error"></a>
                            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse " id="main-menu">
                                <ul class="nav  ml-auto justify-content-center align-items-center ">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Bosh Sahifa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cource.html">Kurslar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Jamoa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <div class="reg d-flex align-items-center mt-sm-3 mt-lg-0">
                                        <?php if (Yii::$app->user->isGuest) : ?>
                                            <a href="<?= Url::to(['/site/login']) ?>" class="nav-link sign_in">Kirish</a>
                                            <a href="<?= Url::to(['/site/signup']) ?>" class="nav-link sign_out">Ro'yxatdan o'tish</a>
                                        <?php else : ?>
                                            <a href="<?= Url::to(['/site/logout']) ?>" class="nav-link sign_out" data-method="POST">Log Out</a>
                                        <?php endif; ?>
                                    </div>

                                </ul>



                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ============ Regsitartion_ Starting ============ -->


    <main>
        <div class="registration">
            <div class="container-fluid">
                <div class="row justify-content-center ">
                    <div class="col-lg-5 px-0">
                        <div class="about_reg ">
                            <img src="/images/IT Live full white.svg" alt="error" class="logo">
                            <h2>Hush Kelibsiz!</h2>
                            <p>Ассалому алейкум! Добро пожаловать в IT Live Academy. <br> Желаем вам успешного использования системы. <br> С уважением, IT Live Academy.</p>
                            <div class="social_network">
                                <a href=""> <i class="fa fa-facebook"></i></a>
                                <a href="https://t.me/It_Live_Guliston"> <i class="fa fa-telegram"></i></a>
                                <a href="https://www.youtube.com/channel/UCpDuo4IQhbYhc9OhsiJ-WVA"> <i class="fa fa-youtube"></i></a>
                                <a href=""> <i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 px-5">
                        <div class="col-lg-12">
                            
                            <div class="row flex-column justify-content-center mt-5">
                                <h4>Login Parol kiriting </h4>
                                <p class="reg_p">Введите свои данные для входа ниже.</p>
                            </div>
                        </div>





                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <?= $form->field($model, 'username')->label('Login kiriting') ?>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>

                        </div>
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        

                        <div style="color:#999;margin:1em 0">
                            <?= Yii::t('app', 'If you forgot your password you can') ?>
                            <?= Html::a(Yii::t('app', 'reset it'), ['site/request-password-reset']) ?>.
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- ========== Starting _ Footer ========== -->

    <footer>
        <div class="footer">
            <div class="container">
                <div class="row justify-content-between align-items-start py-5">
                    <div class="col-lg-3 col-sm-12 col-md-6 mb-3 ">
                        <div class="footer_logo ">
                            <a href="#!"><img src="/images/IT Live full white.svg" alt="error" class="foot_logo"></a>
                            <p class="mt-3">Интерактивные уроки и курсы программирования и создания сайтов (дистанционное обучение) помогут вам в игровой форме изучить основы языков программирования веб-разработки и веб-программирования с нуля. Обучение онлайн 24/7.</p>
                            <a href="#!" class="russion">Русский</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div class="all_link">
                            <h3>ОБЩИЕ ССЫЛКИ</h3>





                            <a href="#!" class="nav-link"> Отзывы о курсах UCode
                                Academy</a>
                            <a href="#!" class="nav-link">Политика конфиденциальности</a>
                            <a href="#!" class="nav-link">
                                Условия использования</a>
                            <a href="#!" class="nav-link">Цены и оплата</a>
                            <a href="#!" class="nav-link">Все курсы</a>
                            <a href="#!" class="nav-link">
                                Партнерская программа</a>
                            <a href="#!" class="nav-link">Комьюнити</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div class="footer_cource">
                            <h3>НАШИ КУРСЫ</h3>
                            <a href="#!" class="nav-link">Bootstrap 4</a>
                            <a href="#!" class="nav-link">VueJS Фреймворк</a>
                            <a href="#!" class="nav-link">Yii2 Фреймворк</a>
                            <a href="#!" class="nav-link">Modern Javascript</a>
                            <a href="#!" class="nav-link">Javascript/jQuery</a>
                            <a href="#!" class="nav-link">CodeIgniter</a>
                            <a href="#!" class="nav-link">Все курсы</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div class="question">
                            <p>Есть вопросы? Найдем ответы!</p>
                            <a href="#!">Написать нам</a>
                            <p>Присоединяйтесь к нам!</p>
                            <div class="footer_icon">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-telegram"></i>
                                <i class="fa fa-youtube"></i>
                                <i class="fa fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © 2020, IT Live Education</p>
                        </div>
                    </div>
                </div>
                <div class="fixed">
                    <a href="index.html">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

        </div>
    </footer>








</body>

</html>