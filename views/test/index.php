<?php
/* @var $this yii\web\View */
?>
<h1>Testing</h1>

<br/>

<?php
foreach ($posts as $post){
  
    foreach ($post->postComments as $comment){
        echo $comment->comment_text;
    }
  
}


?>