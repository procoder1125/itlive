<?php

use nenad\passwordStrength\PasswordInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\models\Kurslar;
use common\models\Teachers;

$courses = Kurslar::find()->all();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,100&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Ro'yxatdan O'tish</title>
</head>

<body>


    <!-- ==========  Header _starting  ========== -->

    <header class="header" style="height:15% !important;">
        <div class="header_menu">

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
                                        <a class="nav-link active" href="<?=Url::to('/')?>">Bosh Sahifa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=Url::to(['/kurslar/index'])?>">Kurslar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Jamoa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <div class="reg d-flex align-items-center mt-sm-3 mt-lg-0">
                                        <?php if(Yii::$app->user->isGuest):?>
                                        <a href="<?=Url::to(['/site/login'])?>" class="nav-link sign_in">Kirish</a>
                                        <a href="<?=Url::to(['/site/signup'])?>" class="nav-link sign_out">Ro'yxatdan o'tish</a>
                                        <?php else : ?>
                                            <a href="<?=Url::to(['/site/logout'])?>"  class="nav-link sign_out" data-method="POST">Log Out</a>
                                        <?php endif; ?>    
                                    </div>

                                </ul>



                            </div>
                        </nav>
                    </div>>
                </div>
            </div>
        </div>
    </header>


    <!-- ============ Regsitartion_ Starting ============ -->

<main>
        <div class="container">
            <!-- yangi -->
            <div class="row justify-content-between align-items-center ">
                <div class="col-lg-12">
                    <div class="news">
                        <div class="news_cource my-5">
                            <img src="/images/OOO.svg" alt="error">
                            <h3>Yangi</h3>
                        </div>
                        <a href="#!" class="courses">Kurslar</a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-between align-items-center mb-5">
                <?php foreach($courses as $course):?>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/bootstrap.png<?php//$course->filename?>" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title"><?=$course->title?></h5>
                            <p class="card-text"> <i>  <?php echo Teachers::findOne(['id' => $course->teacher_id])->name?> <?=Teachers::findOne(['id' => $course->teacher_id])->last ?>  </i> </p>
                            <div class="news_lesson">
                                <img src="/images/checkmark.svg" alt="error" class="img-fluid">
                                <a href="<?=Url::to(['/kurslar/batafsil', 'id' => $course->id])?>">Уроки Bootstrap 4 <br>
                                    в разработке</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- kurslar -->

            <div class="row justify-content-between align-items-center ">
                <div class="col-lg-12">
                    <div class="news">
                        <div class="news_cource my-5">
                            <img src="/images/OOO.svg" alt="error">
                            <h3>Hamma Kurslar</h3>
                        </div>
                        <a href="#!" class="courses">Kurslar</a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-12 col-md-6 col-lg-2 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/icon.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new_two">NEW</p>
                        <div class="card-body">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            <h5 class="card-title_star">HTML & CSS</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 66 заданий </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 32 видео
                                </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 5 часов </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/icon.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new_two">NEW</p>
                        <div class="card-body">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            <h5 class="card-title_star">HTML & CSS</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 66 заданий </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 32 видео
                                </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 5 часов </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-3">
                    <div class="card shadow-lg rounded-0">

                        <img src="/images/icon.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new_two">NEW</p>
                        <div class="card-body">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            <h5 class="card-title_star">HTML & CSS</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 66 заданий </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 32 видео
                                </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 5 часов </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-3">
                    <div class="card shadow-lg rounded-0">

                        <img src="/images/icon.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new_two">NEW</p>
                        <div class="card-body">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            <h5 class="card-title_star">HTML & CSS</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 66 заданий </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 32 видео
                                </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 5 часов </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-3">
                    <div class="card shadow-lg rounded-0">

                        <img src="/images/icon.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new_two">NEW</p>
                        <div class="card-body">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            <h5 class="card-title_star">HTML & CSS</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 66 заданий </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 32 видео
                                </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 5 часов </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-3">
                    <div class="card shadow-lg rounded-0">

                        <img src="/images/icon.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new_two">NEW</p>
                        <div class="card-body">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            <h5 class="card-title_star">HTML & CSS</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 66 заданий </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 32 видео
                                </a>
                                <a href="#!" class="news_icon"> <img src="/images/checkmark.svg" alt="error" class="img-fluid"> 5 часов </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <!-- Ommabop -->
            <div class="row justify-content-between align-items-center ">
                <div class="col-lg-12">
                    <div class="news">
                        <div class="news_cource my-5">
                            <img src="/images/OOO.svg" alt="error">
                            <h3>Ommabop</h3>
                        </div>
                        <a href="#!" class="courses">Kurslar</a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/bootstrap.png" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title">Bootstrap 5</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <img src="/images/checkmark.svg" alt="error" class="img-fluid">
                                <a href="#!">Уроки Bootstrap 4 <br>
                                    в разработке</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/bootstrap.png" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title">Bootstrap 5</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <img src="/images/checkmark.svg" alt="error" class="img-fluid">
                                <a href="#!">Уроки Bootstrap 4 <br>
                                    в разработке</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/javascript.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title">Bootstrap 5</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <img src="/images/checkmark.svg" alt="error" class="img-fluid">
                                <a href="#!">Уроки Bootstrap 4 <br>
                                    в разработке</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/yii21.svg" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title">Bootstrap 5</h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <img src="/images/checkmark.svg" alt="error" class="img-fluid">
                                <a href="#!">Уроки Bootstrap 4 <br>
                                    в разработке</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-5 ">
                <div class="col-lg-6 col-12 ">
                    <div class="more d-flex justify-content-center mt-4">
                        <a href="#!" class="start__read mx-2 ">O'rganishni boshlang</a>
                        <a href="#!" class="about__read mx-2 ">Kurs haqida</a>
                    </div>
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