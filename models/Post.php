<?php

namespace app\models;

use Yii;
use app\models\Image;
use app\models\Comment as Cmnt;
use dektrium\user\models\Profile;
/**
 * This is the model class for table "post".
 *
 * @property integer $post_id
 * @property string $user_id
 * @property string $text
 * @property integer $likes
 * @property integer $comments
 * @property integer $views
 * @property string $created_at
 * @property string $udated_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'post_text'], 'required'],
            [['user_id','views'], 'integer'],
            [['post_text'], 'string'],
            [['created_at', 'udated_at','user_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'user_id' => 'User',
            'post_text' => 'Status',
          
            'views' => 'Views',
            'created_at' => 'Created At',
            'udated_at' => 'Udated At',
        ];
    }
    
      public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'user_id']);
    }
      public function getImages()
    {
        return $this->hasMany(Image::className(), ['post_id' => 'post_id']);
    }
     public function getPostComments()
    {
        return $this->hasMany(Cmnt::className(), ['post_id' => 'post_id']);
    }
}
