<?php

namespace common\models;

use \common\models\base\KcseCandidate as BaseKcseCandidate;

/**
 * This is the model class for table "kcse_candidate".
 */
class KcseCandidate extends BaseKcseCandidate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['index_no', 'year', 'name', 'mean_grade', 'aggrigate_point'], 'required'],
            [['year'], 'safe'],
            [['aggrigate_point'], 'integer'],
            [['index_no'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 50],
            [['mean_grade'], 'string', 'max' => 2]
        ]);
    }
	
}
