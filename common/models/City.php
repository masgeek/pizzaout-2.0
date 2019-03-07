<?php

namespace common\models;

use \common\models\base\City as BaseCity;

/**
 * This is the model class for table "city".
 */
class City extends BaseCity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['CITY_NAME', 'COUNTRY_ID'], 'required'],
            [['COUNTRY_ID'], 'integer'],
            [['CITY_NAME'], 'string', 'max' => 100]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'CITY_ID' => 'C I T Y I D',
            'CITY_NAME' => 'C I T Y N A M E',
            'COUNTRY_ID' => 'C O U N T R Y I D',
        ];
    }
}
