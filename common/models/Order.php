<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $phone
 * @property string $email
 * @property string $container
 * @property string $st_departure
 * @property string $st_arrival
 * @property string $code
 * @property string $bag
 * @property string $bg_departure
 * @property string $bg_arrival
 * @property integer $created
 * @property integer $updated
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created', 'updated'], 'integer'],
            [['company_name', 'phone', 'email', 'container', 'st_departure', 'st_arrival', 'code', 'bag', 'bg_departure', 'bg_arrival'], 'string', 'max' => 255],
            [['company_name', 'phone', 'email', 'container', 'st_departure', 'st_arrival', 'code', 'bag', 'bg_departure', 'bg_arrival'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'company_name' => Yii::t('app', 'Company Name'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'container' => Yii::t('app', 'Container'),
            'st_departure' => Yii::t('app', 'St Departure'),
            'st_arrival' => Yii::t('app', 'St Arrival'),
            'code' => Yii::t('app', 'Code'),
            'bag' => Yii::t('app', 'Bag'),
            'bg_departure' => Yii::t('app', 'Bg Departure'),
            'bg_arrival' => Yii::t('app', 'Bg Arrival'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
    
    
}
