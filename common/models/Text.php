<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%text}}".
 *
 * @property integer $id
 * @property string $key
 * @property string $value
 * @property string $comment
 * @property integer $created
 * @property integer $updated
 * @property integer $created_user_id
 * @property integer $updated_user_id
 */
class Text extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%text}}';
    }


    public function rules()
    {
        return [
            [['key', 'value_ru'], 'required'],
            [['created', 'updated', 'created_user_id', 'updated_user_id', 'lang_id'], 'integer'],
            [['key', 'comment'], 'string', 'max' => 255],
            [['value_kz', 'value_ru', 'value_en'], 'string']
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'value_ru' => Yii::t('app', 'Value Ru'),
            'value_kz' => Yii::t('app', 'Value Kz'),
            'value_en' => Yii::t('app', 'Value En'),
            'lang_id' => Yii::t('app', 'Lang'),
            'comment' => Yii::t('app', 'Comment'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'created_user_id' => Yii::t('app', 'Created User Id'),
            'updated_user_id' => Yii::t('app', 'Updated User Id'),
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created', 'updated'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated'],
                ],
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_user_id',
                'updatedByAttribute' => 'updated_user_id',
            ],
        ];

    }

    public function getValueRu($key) {

        $text = Text::find()->where(['key' => $key])->one();
        return ($text) ? $text->value_ru : '';

    }
    public function getValueKz($key) {

        $text = Text::find()->where(['key' => $key])->one();
        return ($text) ? $text->value_kz : '';

    }
    public function getValueEn($key) {

        $text = Text::find()->where(['key' => $key])->one();
        return ($text) ? $text->value_en : '';

    }

}
