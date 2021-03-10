<?php
use common\models\Kurslar;
use yii\helpers\Url;
use common\models\Teachers;

$courses = Kurslar::find()->all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IT LIve</title>
</head>

<body>
    <?php if (Yii::$app->session->hasFlash('kursga yozilish')) : ?>

        <script>
            setTimeout(
                function() {
                    var id200 = document.getElementById("id200");
                    id200.style.transition = "opacity " + 3 + "s";
                    id200.style.opacity = 0;
                    id200.style.zIndex = 1000;
                    id200.addEventListener("transitionend", function() {
                        console.log("transition has ended, set display: none;");
                        id200.style.display = "none";
                    });
                }, 2500
            );
        </script>

        <div style="width:40%; height:12%; position: absolute; top: 25%; left: 30%;" class="alert alert-primary text-center" id = 'id200'>

            <h3 style="color:coral; text-align:center;"><?= Yii::t('app', 'Siz kursga yozildinzgiz !!!'); ?></h3>

        </div>

    <?php endif; ?>
    <!-- ========== Header _ Starting  ==========-->
    <header id="particles-js">

        <div class="header_top">
            <div class="container">
                <div class="row justify-content-between align-items-center pb-3">
                    <div class="col-lg-12">
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
                                            <a href="<?=Url::to(['/kabinet/index', 'id' => Yii::$app->user->identity])?>"  class="nav-link sign_out" data-method="POST">My Accaunt</a>
                                            <a href="<?=Url::to(['/site/logout'])?>"  class="nav-link sign_out" data-method="POST">Log Out</a>
                                        <?php endif; ?>    
                                    </div>

                                </ul>



                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-between mt-5 mt-sm-2">
                    <div class="col-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper d-flex justify-content-between align-items-center">
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-12 col-md-6 col-lg-6 ">
                                                <h1>BACKEND <br>
                                                    <span>DEVELOPMENT</span>
                                                </h1>
                                                <div class="header_cource">
                                                    <p>PHP,</p>
                                                    <p>MySql,</p>
                                                    <p>Python,</p>
                                                    <p>Django,</p>
                                                    <p>Yii2,</p>
                                                    <p>NodeJs,</p>
                                                    <p>Java</p>
                                                </div>
                                                <p>Интерактивные курсы и уроки по разработке и веб программированию.Научим создавать профессиональные сайты с нуля. Начни обучение сейчас!
                                                </p>
                                                <a href="#!" class="slider_link">Подробно</a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <img src="/images/Header_backend_isometric.svg" alt="error" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <h1>BACKEND <br>
                                                    <span>DEVELOPMENT</span>
                                                </h1>
                                                <div class="header_cource">
                                                    <p>PHP,</p>
                                                    <p>MySql,</p>
                                                    <p>Python,</p>
                                                    <p>Django,</p>
                                                    <p>Yii2,</p>
                                                    <p>NodeJs,</p>
                                                    <p>Java</p>
                                                </div>
                                                <p>Интерактивные курсы и уроки по разработке и веб программированию.Научим создавать профессиональные сайты с нуля. Начни обучение сейчас!
                                                </p>
                                                <a href="#!" class="slider_link">Подробно</a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <img src="/images/Header_backend_isometric.svg" alt="error" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <h1>BACKEND <br>
                                                    <span>DEVELOPMENT</span>
                                                </h1>
                                                <div class="header_cource">
                                                    <p>PHP,</p>
                                                    <p>MySql,</p>
                                                    <p>Python,</p>
                                                    <p>Django,</p>
                                                    <p>Yii2,</p>
                                                    <p>NodeJs,</p>
                                                    <p>Java</p>
                                                </div>
                                                <p>Интерактивные курсы и уроки по разработке и веб программированию.Научим создавать профессиональные сайты с нуля. Начни обучение сейчас!
                                                </p>
                                                <a href="#!" class="slider_link">Подробно</a>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <img src="/images/Header_backend_isometric.svg" alt="error" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> -->
                            <!-- <div class="swiper-scrollbar"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </header>

    <!-- ========== Section _Starting   ==========-->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center my-md-5">
                <div class="col-sm-12 col-md-6 col-lg-3 my-sm-2 ">
                    <div class="result ">
                        <img src="/images/Comments.svg" alt="error" class="img-fluid">
                        <div class="result_p">
                            <h3>1000</h3>
                            <p>Tahsil olayotganlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-sm-2">
                    <div class="result">
                        <img src="/images/Play.svg" alt="error" class="img-fluid">
                        <div class="result_p">
                            <h3>1000</h3>
                            <p>Video darslar</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-sm-2">
                    <div class="result">
                        <img src="/images/Comments.svg" alt="error" class="img-fluid">
                        <div class="result_p">
                            <h3>1000</h3>
                            <p>Bajarilgan proektla</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-sm-2">
                    <div class="result">
                        <img src="/images/Comments.svg" alt="error" class="img-fluid">
                        <div class="result_p">
                            <h3>1000</h3>
                            <p>O'quvchilar reytingi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-lg-between my-5">
                <div class="col-12 col-md-6 justify-content-end">
                    <div class="about_cource mb-5">
                        <img src="/images/About_us.svg" alt="error" class="img-fluid">
                        <img class="play" src="/images/play-button.svg" alt="error" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6 ">

                    <div class="about_profession">

                        <div class="about_icon">
                            <p>ИНТЕРАКТИВНЫЙ КУРС</p>
                            <img src="/images/checkmark.svg" alt="error">
                        </div>
                        <h1>WEB DASTURCHI KASBI</h1>
                        <p>Обучение основам веб программирования для <br> начинающих - HTML, CSS, Bootstrap, PHP, MySQL, <br> JavaScript, jQuery, Linux, GIT, Codeigniter</p>
                        <div class="more mt-4">
                            <a href="<?=Url::to(['student/join'])?>" class="start__read">O'rganishni boshlang</a>
                            <a href="#!" class="about__read">Kurs haqida</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Starting _ Main   ==========-->

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
                        <img src="" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title"><?=$course->title?></h5>
                            
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
                <?php foreach($courses as $course):?>
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

                            <h5 class="card-title_star"><?=$course->title?></h5>
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
                <?php endforeach?>

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
               <?php foreach($courses as $course):?>     

                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-lg rounded-0">
                        <img src="/images/bootstrap.png" class="card-img-top img-fluid" alt="error">
                        <p class="new">NEW</p>
                        <div class="card-body">
                            <p>Пока нет оценок</p>
                            <img src="/images/couurce_icon.svg" alt="error" class="course_position">
                            <h5 class="card-title"><?=$course->title?></h5>
                            <p class="card-text"> <i>Ergashev Abdulla</i> </p>
                            <div class="news_lesson">
                                <img src="/images/checkmark.svg" alt="error" class="img-fluid">
                                <a href="#!">Уроки Bootstrap 4 <br>
                                    в разработке</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="row justify-content-center pb-5 ">
                <div class="col-lg-6 col-12 ">
                    <div class="more d-flex justify-content-center mt-4">
                        <a href="<?=Url::to(['/student/join'])?>" class="start__read mx-2 ">O'rganishni boshlang</a>
                        <a href="#!" class="about__read mx-2 ">Kurs haqida</a>
                    </div>
                </div>
            </div>
        </div>
        </div>





    </main>

    <!-- ========== В ЧЕМ НАШИ ПРЕИМУЩЕСТВА ==========-->

    <div class="wrapper">
        <div class="container ">
            <div class="row justify-content-between align-items-center justify-content-sm-center ">
                <div class="col-lg-12">

                    <div class="interactiv_title my-5">
                        <img src="/images/OOO.svg" alt="error">
                        <h3>В ЧЕМ НАШИ ПРЕИМУЩЕСТВА</h3>
                    </div>


                </div>

            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-6 col-12 mb-sm-3">
                    <div class="interactiv">
                        <img src="/images/Screen_update.svg" alt="error">
                        <div class="title">
                            <h4>Интерактивное обучение</h4>
                            <p>Проходи задания прямо в браузере и мгновенно результат – верно или нет</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-sm-3">
                    <div class="interactiv">
                        <img src="/images/Contract.svg" alt="error">
                        <div class="title">
                            <h4>Уникальные курсы</h4>
                            <p>Изучай лучшие теории и практики построенные на авторских методах</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-sm-3">
                    <div class="interactiv">
                        <img src="/images/Wallet.svg" alt="error" class="img-fluid">
                        <div class="title">
                            <h4>Интерактивное обучение</h4>
                            <p>Проходи задания прямо в браузере и мгновенно результат – верно или нет</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center ">
                <div class="col-lg-12">

                    <div class="interactiv_title my-5">
                        <img src="/images/OOO.svg" alt="error">
                        <h3>НАШИ ЗНАНИЯ И ТЕХНОЛОГИИ</h3>
                    </div>


                </div>

            </div>

            <div class="row justify-content-between align-items-center overflow-hidden">
                <div class="col-lg-12 ">
                    <div class="swiper-container1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/bootstrap-4.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/html-5.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/angular-icon.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/bootstrap-4.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/laravel.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-6 ">
                                <img src"images/node-js-logo.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/python-4.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/vue-js-1.svg" alt="error">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/node-js-logo.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/php-1.svg" alt="error">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/vue-js-1.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2 ">
                                <img src="/images/node-js-logo.svg" alt="error">
                            </div>
                            <div class="swiper-slide col-3 col-md-2">
                                <img src="/images/php-1.svg" alt="error">
                            </div>

                            <!-- Add Pagination -->
                            <!-- <div class="swiper-pagination1"></div> -->

                        </div>
                        <div class="swiper-button-next">

                        </div>
                        <div class="swiper-button-prev ">

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Starting _ Section -->

        <div class="section">
            <div class="container">
                <div class="row justify-content-between align-items-center py-5 ">
                    <div class="col-lg-6 col-12 mb-sm-3 text-md-center  text-lg-left">
                        <div class="left">
                            <h2>Развивайте свою эффективность и востребованность
                            </h2>
                            <p>Развивайте свою эффективность и востребованность Мы разработали уникальный курс и максимально автоматизировали процессы, такие как проверка домашних заданий, проверка тестов, отслеживание прогресса студента и начисление баллов
                                (XP), тем самым мы смогли максимально снизить стоимость.
                            </p>
                            <a href="#!">70% учеников онлайн–центра FructCode находят работу уже в процессе обучения!</a>
                        </div>
                    </div>
                    <div class="col-lg-6  col-sm-12 text-md-center">
                        <div class="image shadow-lg">
                            <img src="/images/certifacate.svg" alt="error" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Starting _ Active -->


        <div class="active_t">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-12 col-lg-6 mb-3">
                        <div class="interactiv_title my-5">
                            <img src="/images/OOO.svg" alt="error">
                            <h3>ЛИДЕРЫ ЗА НЕДЕЛЮ</h3>
                        </div>

                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-5 mb-3">
                                <div class="img_user">
                                    <div class="img_border ">
                                        <a href="#!"> <img src="/images/User_profil.svg" alt="error" class="img-fluid"></a>
                                        <img src="/images/one.svg" alt="error">
                                    </div>

                                    <i>Ergashev Abdulla</i>
                                    <h3>Web Developer</h3>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-lg-6 mb-3">
                        <div class="interactiv_title my-5">
                            <img src="/images/OOO.svg" alt="error">
                            <h3>ЛИДЕРЫ ЗА ВСЕ ВРЕМЯ</h3>
                        </div>

                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-5 mb-3">
                                <div class="img_user">
                                    <div class="img_border ">
                                        <a href="#!"> <img src="/images/User_profil.svg" alt="error" class="img-fluid"></a>
                                        <img src="/images/one.svg" alt="error">
                                    </div>

                                    <i>Ergashev Abdulla</i>
                                    <h3>Web Developer</h3>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>
                                <div class="news_sms mb-3">
                                    <div class="sms_border">
                                        <a href="#!"> <img src="/images/user_profil_smalls.svg" alt="error" class="img-fluid img"></a>
                                        <img src="/images/sms.svg" alt="error">
                                    </div>
                                    <div class="name ml-3">
                                        <p>Ergashev Abdulla</p>
                                        <h3>Web Developer</h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 ">
                        <div class=" call d-flex justify-content-center">
                            <a href="#! " class="start__read ">Бросить вызов?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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