<?php

namespace common\models;

use \common\models\base\Subcounty as BaseSubcounty;

/**
 * This is the model class for table "subcounty".
 */
class Subcounty extends BaseSubcounty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['subcounty_code', 'subcounty_name', 'county_code'], 'required'],
            [['subcounty_code', 'county_code'], 'string', 'max' => 3],
            [['subcounty_name'], 'string', 'max' => 100]
        ]);
    }
	
}
