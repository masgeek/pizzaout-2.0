<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%sizes}}".
 *
 * @property int $SIZE_ID
 * @property string $SIZE_TYPE
 * @property bool $ACTIVE
 *
 * @property MenuItemType[] $menuItemTypes
 */
class Sizes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%sizes}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SIZE_TYPE'], 'required'],
            [['ACTIVE'], 'boolean'],
            [['SIZE_TYPE'], 'string', 'max' => 20],
            [['SIZE_TYPE'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SIZE_ID' => 'S I Z E I D',
            'SIZE_TYPE' => 'S I Z E T Y P E',
            'ACTIVE' => 'A C T I V E',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuItemTypes()
    {
        return $this->hasMany(MenuItemType::className(), ['ITEM_TYPE_SIZE' => 'SIZE_TYPE']);
    }
}
