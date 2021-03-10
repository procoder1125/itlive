<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\helpers\Url;
use common\models\Kurslar;
use Yii;

class KurslarController extends Controller {


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBatafsil($id){
        $kurs = Kurslar::findOne(['id' => $id]);
        return $this->render('batafsil',[
            'kurs' => $kurs,
            ]);
    }


}

?>