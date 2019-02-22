<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "kcse_candidate_subject".
 *
 * @property integer $cand_subject_id
 * @property integer $candidate_id
 * @property integer $subject_code
 * @property string $grade
 */
class KcseCandidateSubject extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cand_subject_id', 'candidate_id', 'subject_code', 'grade'], 'required'],
            [['cand_subject_id', 'candidate_id', 'subject_code'], 'integer'],
            [['grade'], 'string', 'max' => 2]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kcse_candidate_subject';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cand_subject_id' => 'Cand Subject ID',
            'candidate_id' => 'Candidate ID',
            'subject_code' => 'Subject Code',
            'grade' => 'Grade',
        ];
    }
}
