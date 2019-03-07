<?php

namespace common\models;

use \common\models\base\UserType as BaseUserType;

/**
 * This is the model class for table "user_type".
 */
class UserType extends BaseUserType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['USER_TYPE_NAME'], 'required'],
            [['USER_TYPE_NAME'], 'string', 'max' => 255]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'USER_TYPE_ID' => 'U S E R T Y P E I D',
            'USER_TYPE_NAME' => 'U S E R T Y P E N A M E',
        ];
    }
}
