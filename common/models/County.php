<?php

namespace common\models;

use \common\models\base\County as BaseCounty;

/**
 * This is the model class for table "county".
 */
class County extends BaseCounty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['county_code', 'county_name'], 'required'],
            [['county_code'], 'string', 'max' => 3],
            [['county_name'], 'string', 'max' => 100]
        ]);
    }
	
}
