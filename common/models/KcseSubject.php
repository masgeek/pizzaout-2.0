<?php

namespace common\models;

use \common\models\base\KcseSubject as BaseKcseSubject;

/**
 * This is the model class for table "kcse_subject".
 */
class KcseSubject extends BaseKcseSubject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['subject_code'], 'required'],
            [['subject_code'], 'integer'],
            [['subject_name'], 'string', 'max' => 255]
        ]);
    }
	
}
