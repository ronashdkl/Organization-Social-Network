<?php

namespace app\models;

use Yii;
use dektrium\user\models\Profile;
/**
 * This is the model class for table "comment".
 *
 * @property integer $comment_id
 * @property string $post_id
 * @property string $image_id
 * @property string $gallery_id
 * @property string $user_id
 * @property string $comment_text
 * @property string $created_at
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'image_id', 'gallery_id', 'user_id'], 'integer'],
            [['user_id', 'comment_text'], 'required'],
            [['comment_text'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'post_id' => 'Post ID',
            'image_id' => 'Image ID',
            'gallery_id' => 'Gallery ID',
            'user_id' => 'User ID',
            'comment_text' => 'Comment Text',
            'created_at' => 'Created At',
        ];
    }
    
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'user_id']);
    }
}
