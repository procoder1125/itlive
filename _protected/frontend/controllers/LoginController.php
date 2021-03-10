<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class LoginController extends Controller {

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

    public function actionIndex(){ // product list
        // var_dump(Yii::$app->request->isGet);
        // var_dump(Yii::$app->request->isPost);
        // var_dump(Yii::$app->request->isAjax);
        
        $products = [
            ['title' => "Cola"],
            ['title' => "Fanta"],
        ];

        $cars = [
            ['title' => "BMW"],
            ['title' => "Mercedes"],
        ];

        return $this->render("index", [
            'products' => $products,
            'cars' => $cars
        ]);
    }

    public function actionView(){ // product batafsil
        echo 2;

        
    }
}