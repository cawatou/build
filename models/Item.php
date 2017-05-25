<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property string $color
 * @property string $size
 * @property string $price
 * @property string $img
 * @property string $title
 * @property string $unit
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id'], 'integer'],
            [['color', 'size', 'img', 'title', 'unit'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'color' => 'Color',
            'size' => 'Size',
            'price' => 'Цена',
            'img' => 'Img',
            'title' => 'Title',
            'unit' => 'Unit',
        ];
    }
}
