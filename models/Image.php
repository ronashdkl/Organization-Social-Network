<?php

namespace app\models;

use Yii;
use app\models\Post;
use app\models\Comment;
/**
 * This is the model class for table "image".
 *
 * @property integer $image_id
 * @property string $user_id
 * @property string $gallery_id
 * @property string $post_id
 * @property string $image_url
 * @property integer $image_likes
 * @property integer $image_views
 * @property string $created_at
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'image_url'], 'required'],
            [['user_id', 'gallery_id', 'post_id', 'image_likes', 'image_views'], 'integer'],
            [['image_url'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image_id' => 'Image ID',
            'user_id' => 'User',
            'gallery_id' => 'Gallery',
            'post_id' => 'Post',
            'image_url' => 'Image',
            'image_likes' => 'Likes',
            'image_views' => 'Views',
            'created_at' => 'Created At',
        ];
    }
    
     public function getPost()
    {
        return $this->hasOne(Post::className(), ['post_id' => 'post_id']);
    }
    
     public function getComments()
    {
        return $this->hasMany(Comment::className(), ['image_id' => 'image_id']);
    }
    
}
