<?php

/* 
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

return [
    'gridview' => [ 'class' => '\kartik\grid\Module' ] ,
    'admin' => [
            'class' => 'mdm\admin\Module',
        ],
     'user' => [
        'class' => 'dektrium\user\Module',
         'enableUnconfirmedLogin'=>true,
         'enableConfirmation'=>true,
          'admins' => ['ronash']
    ],
    'rbac' => 'dektrium\rbac\RbacWebModule',
     'post' => [
            'class' => 'app\modules\post\Post',
       
        ],
    ];