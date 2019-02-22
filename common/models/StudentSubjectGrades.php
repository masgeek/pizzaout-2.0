<?php

namespace common\models;

use \common\models\base\StudentSubjectGrades as BaseStudentSubjectGrades;

/**
 * This is the model class for table "student_subject_grades".
 */
class StudentSubjectGrades extends BaseStudentSubjectGrades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['CENTER_CODE'], 'string', 'max' => 50],
            [['INDEX_NO'], 'string', 'max' => 12],
            [['YEAR', 'SUBJECT_CODE', 'SUBJECT_GRADE'], 'string', 'max' => 10]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'GADE_ID' => 'Gade  ID',
            'CENTER_CODE' => 'Center  Code',
            'INDEX_NO' => 'Index  No',
            'YEAR' => 'Year',
            'SUBJECT_CODE' => 'Subject  Code',
            'SUBJECT_GRADE' => 'Subject  Grade',
        ];
    }
}
