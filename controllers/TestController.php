<?php

namespace app\controllers;
use app\models\Post;
use app\models\Image;
use app\models\Comment;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $post = Post::find()->all();
    
        return $this->render('index',['posts'=>$post]);
    }

}
