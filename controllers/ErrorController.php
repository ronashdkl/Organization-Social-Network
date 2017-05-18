<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class ErrorController extends \yii\web\Controller
{
   
    
  //  public $layout = 'main-login';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
           
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

        
 public function beforeAction($action) {
    
        if(Yii::$app->user->isGuest){
            Yii::$app->layout = 'main-login';
        } else {
            Yii::$app->layout = 'main';
        }
        return parent::beforeAction($action);
    }
    
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//            'pages'=>[
//                'class'=>'yii\web\ViewAction'
//            ]
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

}
