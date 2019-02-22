<?php

namespace common\models;

use \common\models\base\KcseCentre as BaseKcseCentre;

/**
 * This is the model class for table "kcse_centre".
 */
class KcseCentre extends BaseKcseCentre
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['centre_code', 'centre_name'], 'required'],
            [['centre_code'], 'string', 'max' => 10],
            [['centre_name', 'subcounty_code'], 'string', 'max' => 255]
        ]);
    }
	
}
