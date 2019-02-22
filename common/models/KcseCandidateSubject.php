<?php

namespace common\models;

use \common\models\base\KcseCandidateSubject as BaseKcseCandidateSubject;

/**
 * This is the model class for table "kcse_candidate_subject".
 */
class KcseCandidateSubject extends BaseKcseCandidateSubject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['cand_subject_id', 'candidate_id', 'subject_code', 'grade'], 'required'],
            [['cand_subject_id', 'candidate_id', 'subject_code'], 'integer'],
            [['grade'], 'string', 'max' => 2]
        ]);
    }
	
}
