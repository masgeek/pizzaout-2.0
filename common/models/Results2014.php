<?php

namespace common\models;

use \common\models\base\Results2014 as BaseResults2014;

/**
 * This is the model class for table "results_2014".
 */
class Results2014 extends BaseResults2014
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['candidate_id'], 'integer'],
            [['CENTRE_CODE', 'index_no', 'name', 'mean_grade', 'aggrigate_p', 'SBJ1', 'SBJ1_grade', 'SBJ2', 'SBJ2_grade', 'SBJ3', 'SBJ3_grade', 'SBJ4', 'SBJ4_grade', 'SBJ5', 'SBJ5_grade', 'SBJ6', 'SBJ6_grade', 'SBJ7', 'SBJ7_grade', 'SBJ8', 'SBJ8_grade', 'SBJ9', 'SBJ9_grade', 'CENTRE_NAME', 'YEAR'], 'string', 'max' => 255]
        ]);
    }
	
}
