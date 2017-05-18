<?php

/* 
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

namespace app\components;
 
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
 
class UserComponent extends Component
{
 
    Private $avatar ;
    Private $name;
    Private $email;
    
    public function __construct() {
        if(!Yii::$app->User->isGuest):
        $this->avatar = Yii::$app->user->identity->profile->getAvatarUrl(160);
        $this->email = Yii::$app->user->identity->profile->public_email;
        $this->name =  Yii::$app->user->identity->profile->name;
    endif;
    }
    
 public function avatar()
 {
 return $this->avatar;
 }
 
 public function name() {
     return $this->name;
 }
 public function email() {
     return $this->email;
 }
}