<?php

namespace frontend\controllers;

use common\models\Bolimlar;
use common\models\Xodimlar;
use common\models\Yangilik;
use yii\web\Controller;
use Yii;

class OtherController extends Controller {

    // public function actionIndex($id){ // product list
    //     echo $id;
    // }

    // public function actionIndex(){ // product list
    //     echo $_GET['id'];
    // }
    
    // public function actionIndex(){ // product list
    //     $id = Yii::$app->request->get('id');
    //     $id = Yii::$app->request->get('id', 2); // default qiymat berish
    //     echo $id;
    // }

    public function actionBolimlar(){ // product list
       
        return $this->render('bolimlar', [
            
        ]);
    }

    public function actionAbout($id){ // product list
        $model = Bolimlar::findOne(['id' => $id]);
        $xodimlar = Xodimlar::find()->where(['bolim_id' => $id])->all();
        return $this->render('about', [
          'model' => $model,
          'xodimlar' => $xodimlar,  
        ]);
    }

    public function actionContact(){ // product list
       
        return $this->render('contact', [
            
        ]);
    }

    public function actionYangilikBatafsil($id){
        $model = Yangilik::findOne(['id' => $id]);
        $yangiliklar = Yangilik::find()->where('id != :id', ['id'=>$id])->orderBy(['id' => SORT_DESC])->limit(3)->all();
        return $this->render('yangilik-batafsil',[
            'model' => $model,
            'yangiliklar' => $yangiliklar,
            'id' => $id,
        ]);
    }

    public function actionXodimView($id){
        $model = Xodimlar::findOne(['id' => $id]);
        
        return $this->render('xodim-view',[
            'model' => $model,
            
            'id' => $id,
        ]);
    }

    public function actionView(){ // product batafsil
        echo 2;
        
        return $this->render("view");
    }
}