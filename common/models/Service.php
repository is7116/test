<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $price
 * @property string|null $description
 * @property int|null $status
 * @property string|null $expires_at
 * @property int $city_id
 *
 * @property City $city
 */
class Service extends \yii\db\ActiveRecord
{
    const STATUS_DISABLED = 0;
    const STATUS_ENABLED = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'price', 'city_id'], 'required'],
            [['price', 'status', 'city_id'], 'integer'],
            [['description'], 'string'],
            [['expires_at'], 'safe'],
            [['name', 'code'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'price' => 'Price',
            'description' => 'Description',
            'status' => 'Status',
            'expires_at' => 'Expires At',
            'city_id' => 'City ID',
        ];
    }

    /**
     * @return string[]
     */
    public static function statusLabels()
    {
        return [
            self::STATUS_ENABLED => 'Включена',
            self::STATUS_DISABLED => 'Выключена',
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }
}
