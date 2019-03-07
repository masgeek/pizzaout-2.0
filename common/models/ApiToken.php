<?php

namespace common\models;

use \common\models\base\ApiToken as BaseApiToken;

/**
 * This is the model class for table "api_token".
 */
class ApiToken extends BaseApiToken
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['USER_ID'], 'integer'],
            [['DATE_CREATED', 'EXPIRY_DATE'], 'safe'],
            [['API_TOKEN'], 'string', 'max' => 255]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'TOKEN_ID' => 'T O K E N I D',
            'USER_ID' => 'U S E R I D',
            'API_TOKEN' => 'A P I T O K E N',
            'DATE_CREATED' => 'D A T E C R E A T E D',
            'EXPIRY_DATE' => 'E X P I R Y D A T E',
        ];
    }
}
