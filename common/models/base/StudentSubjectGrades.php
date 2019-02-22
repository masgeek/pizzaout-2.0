<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "student_subject_grades".
 *
 * @property integer $GADE_ID
 * @property string $CENTER_CODE
 * @property string $INDEX_NO
 * @property string $YEAR
 * @property string $SUBJECT_CODE
 * @property string $SUBJECT_GRADE
 */
class StudentSubjectGrades extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CENTER_CODE'], 'string', 'max' => 50],
            [['INDEX_NO'], 'string', 'max' => 12],
            [['YEAR', 'SUBJECT_CODE', 'SUBJECT_GRADE'], 'string', 'max' => 10]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_subject_grades';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
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
