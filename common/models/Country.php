<?php

namespace common\models;

use \common\models\base\Country as BaseCountry;

/**
 * This is the model class for table "country".
 */
class Country extends BaseCountry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['code', 'country', 'population'], 'required'],
            [['population'], 'integer'],
            [['code', 'country'], 'string', 'max' => 255]
        ]);
    }
	
}
