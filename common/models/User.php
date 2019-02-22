<?php

namespace common\models;

use \common\models\base\User as BaseUser;

/**
 * This is the model class for table "user".
 */
class User extends BaseUser
{
    public $reCaptcha;

    public function rules()
    {
        $rules = parent::rules();

        $rules[] = [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::class];

        return $rules;
    }

}
