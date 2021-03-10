<?php 

namespace frontend\controllers;
use common\models\UserProfile;
use yii\web\Controller;
use Yii;

class StudentController extends Controller {
    public function actionIndex(){
        return $this->render("index");
    }

    public function actionView(){
        $firstname = Yii::$app->request->post('firstname');
        
        echo $firstname;
        return $this->render("view");
    }


    public function actionJoin(){

        
        $model = new UserProfile();
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                $model->data = date("Y-m-d H:i");
                $model->student_status = 0;
                $model->save();
                if($model->save()){
                    Yii::$app->session->setFlash('kursga yozilish');
                    return $this->goHome();
                }
                
            }
           
        }
        return $this->render('join', [
            'model' => $model,
        ]);
    }
}