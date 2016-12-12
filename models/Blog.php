<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $moderator_id
 * @property string $title
 * @property string $content
 * @property string $preview_element
 * @property string $created_at
 * @property string $updated_at
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'preview_element'], 'required'],
            [['author_id', 'moderator_id'], 'integer'],
            [['content'], 'string'],
            [['author_id', 'moderator_id', 'created_at', 'updated_at'], 'safe'],
            [['title', 'preview_element'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'moderator_id' => 'Moderator ID',
            'title' => 'Title',
            'content' => 'Content',
            'preview_element' => 'Preview Element',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'author_id',
                'updatedByAttribute' => 'moderator_id',
            ],
        ];
    }
}
