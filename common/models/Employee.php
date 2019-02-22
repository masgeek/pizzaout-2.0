<?php

namespace common\models;

use \common\models\base\Employee as BaseEmployee;

/**
 * This is the model class for table "employee".
 */
class Employee extends BaseEmployee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['name', 'email'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100]
        ]);
    }
	
}
