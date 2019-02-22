<?php

namespace common\models;

use \common\models\base\AccountType as BaseAccountType;

/**
 * This is the model class for table "account_type".
 */
class AccountType extends BaseAccountType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['account_type'], 'required'],
            [['account_type'], 'string', 'max' => 50],
            [['account_type'], 'unique']
        ]);
    }
	
}
