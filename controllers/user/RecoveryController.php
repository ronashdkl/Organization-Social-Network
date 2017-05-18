<?php

/* 
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

namespace app\controllers\user;

use dektrium\user\controllers\RecoveryController as BaseRecoveryController;

class RecoveryController extends BaseRecoveryController
{
   public $views = "user/recovery";
}