<?php

namespace app\models;

use Yii;
use app\models\Image;
use app\models\Comment;
/**
 * This is the model class for table "gallery".
 *
 * @property integer $gallery_id
 * @property string $user_id
 * @property string $gallery_name
 * @property string $gallery_location
 * @property string $gallery_description
 * @property integer $gallery_views
 * @property integer $gallery_likes
 * @property string $created_at
 * @property string $updated_at
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'gallery_name', 'gallery_location', 'gallery_description'], 'required'],
            [['user_id', 'gallery_views', 'gallery_likes'], 'integer'],
            [['gallery_description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['gallery_name', 'gallery_location'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gallery_id' => 'Gallery ID',
            'user_id' => 'User',
            'gallery_name' => 'Gallery Name',
            'gallery_location' => 'Gallery Location',
            'gallery_description' => 'Gallery Description',
            'gallery_views' => 'Views',
            'gallery_likes' => 'Likes',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
      public function getImages()
    {
        return $this->hasMany(Image::className(), ['gallery_id' => 'gallery_id']);
    }
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['gallery_id' => 'gallery_id']);
    }
}
