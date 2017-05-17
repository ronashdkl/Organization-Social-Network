<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="posts">Loading Status...</div>
<?php 
     $this->registerJs( <<< EOT_JS_CODE

        // JS code here
             $.get( "home/posts", function( data ) {
  $("#posts" ).html( data );

});

EOT_JS_CODE
);
?>
