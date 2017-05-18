<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php foreach ($posts as $post){ ?>
<div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="<?= $post->profile->getAvatarUrl(160) ?>" alt="User Image">
                <span class="username"><a href="#"><?= $post->profile->name ?></a></span>
                <span class="description">Shared publicly -  <?= Yii::$app->formatter->asDatetime($post->created_at, 'php:h:m a M-d-y'); ?></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
             <?= $post->post_text ?>

              
              <?php if($post->images){ ?>
              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <img class="attachment-img" src=" http://placehold.it/350x350" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <!-- /.attachment-block -->
              <?php } else{echo "<br/><br/>";}?>
              <!-- Social sharing buttons -->
<!--              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>-->
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted"><?php // $post->likes ?>0 likes - <?= count($post->postComments) ?> comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
                <?php if($post->postComments): foreach($post->postComments as $comment){ ?>
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="<?= $comment->profile->getAvatarUrl(30) ?>" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                      <?= $comment->profile->name?>
                          <span class="text-muted pull-right">  <?= Yii::$app->formatter->asDatetime($comment->created_at, 'php:h:m a M-d-y'); ?></span>
                      </span><!-- /.username -->
                 <?= $comment->comment_text ?>
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
                <?php } endif;?>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="<?= Yii::$app->user->identity->profile->getAvatarUrl(160) ?>" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
<?php } ?>