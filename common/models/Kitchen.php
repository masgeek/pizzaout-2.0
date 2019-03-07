<?php

namespace common\models;

use \common\models\base\Kitchen as BaseKitchen;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kitchen".
 */
class Kitchen extends BaseKitchen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
            [
                [['KITCHEN_NAME', 'CITY_ID'], 'required'],
                [['CITY_ID'], 'integer'],
                [['OPENING_TIME', 'CLOSING_TIME'], 'safe'],
                [['ADDRESS'], 'string'],
                [['KITCHEN_NAME'], 'string', 'max' => 100]
            ]);
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['CITY_ID'] = \Yii::t('app', 'Kitchen City');
        return $labels;
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return $this->attributeLabels();
    }

    public static function GetKitchens()
    {
        $kitchen = self::find()
            ->all();

        $listData = ArrayHelper::map($kitchen, 'KITCHEN_ID', 'KITCHEN_NAME');

        return $listData;
    }

}
