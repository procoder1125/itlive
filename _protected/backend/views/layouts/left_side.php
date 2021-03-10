<?php

use common\models\Bolimlar;
use common\models\Categories;
use yii\helpers\Url;
use common\models\Kurslar;

$courses = Kurslar::find()->all();

?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= Url::to(['/']) ?>" class="site_title"><i class="fa fa-code"></i></a>
        </div>
        <?php //if (!Yii::$app->user->isGuest):
        ?>
        <?php //$user = \common\models\User::findOne(Yii::$app->user->id);
        ?>
        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_info">
                <span>Добро пожаловать,</span>
                <h2><?= 'admin' ?></h2>
            </div>
        </div>
        <?php// endif;?>
        <!-- /menu prile quick info -->
        <div class="clearfix"></div>
        <br />
        <?php
        // $langs = \common\models\Lang::find()->where('id != :current_id', [':current_id' => \common\models\Lang::getCurrent()->id])->all();
        // foreach ($langs as $lang){
        //     echo \yii\helpers\Html::a($lang->name, '/backend/'.$lang->url.'/'.Yii::$app->getRequest()->pathInfo, ['style' => 'margin-right: 10px; margin-left: 15px; color: white']);
        // } 

        ?>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-user"></i> Пользователи<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to(['/user/index']) ?>">Список пользователей</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bookmark"></i> Языки<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to(['/lang/index']) ?>">Список языков</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a><i class="fa fa-book"></i> Kurslar<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?= Url::to(['/kurslar/create']) ?>">kurs qo'shish</a></li>
                            <li><a href="<?= Url::to(['/kurslar/index']) ?>">kurslar</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-child"></i>Kursga yozilganlar<span class="fa fa-chevron-right"></span>
                    <ul class="nav child_menu" style="display: none">
                        <?php foreach($courses as $course):?>    
                            <li><a href="<?= Url::to(['/user-profile/index', 'id' => $course->id]) ?>"><?=$course->title?></a></li>
                        <?php endforeach;?>    
                        </ul></a>

                    </li>

                    <li><a href="<?= Url::to(['/teachers/index']) ?>"><i class="fa fa-graduation-cap"></i> Teachers<span class="fa fa-chevron-right"></span></a>

                    </li>
                    <li><a href="<?= Url::to(['/maqolalar/index']) ?>"><i class="fa fa-file-word-o"></i> Maqolalar<span class="fa fa-chevron-right"></span></a>

                    </li>
                    <li><a href="<?= Url::to(['/bayramlar/index']) ?>"><i class="fa fa-bell"></i> Bayramlar<span class="fa fa-chevron-right"></span></a>

                    </li>
                </ul>



            </div>
        </div>

        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a href="" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a href="<?= Url::to(['/site/logout']) ?>" data-method="post" class="pull-right" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>