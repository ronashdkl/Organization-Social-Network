<?php

/* 
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

return [
    'gridview' => [ 'class' => '\kartik\grid\Module' ] ,
   
     'user' => [
        'class' => 'dektrium\user\Module',
         'enableUnconfirmedLogin'=>true,
         'enableConfirmation'=>true,
          'admins' => ['ronash'],
         'controllerMap' => [
            'recovery' => [
                'class'  => 'dektrium\user\controllers\RecoveryController',
                'layout' => '//main-login',
                
            ],
             'registration' => [
                'class'  => 'dektrium\user\controllers\RegistrationController',
                'layout' => '//main-login',
            ],
             'admin'=>[
                 'class'=>'dektrium\user\controllers\AdminController',
                 'layout'=>'//main',
                 'as access' => [
                        'class' => 'yii\filters\AccessControl',
                        'rules' => [
                            [
                                'allow' => true,
                                'roles' => ['admin'],
                            ],
                            [
                                'actions' => ['switch'],
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                        ],
                    ],
             ]
        ],
         ],
    'rbac' => 'dektrium\rbac\RbacWebModule',
     'post' => [
            'class' => 'app\modules\post\Post',
       
        ],
    
    ];