<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "results_2014".
 *
 * @property string $CENTRE_CODE
 * @property string $index_no
 * @property string $name
 * @property string $mean_grade
 * @property string $aggrigate_p
 * @property string $SBJ1
 * @property string $SBJ1_grade
 * @property string $SBJ2
 * @property string $SBJ2_grade
 * @property string $SBJ3
 * @property string $SBJ3_grade
 * @property string $SBJ4
 * @property string $SBJ4_grade
 * @property string $SBJ5
 * @property string $SBJ5_grade
 * @property string $SBJ6
 * @property string $SBJ6_grade
 * @property string $SBJ7
 * @property string $SBJ7_grade
 * @property string $SBJ8
 * @property string $SBJ8_grade
 * @property string $SBJ9
 * @property string $SBJ9_grade
 * @property string $CENTRE_NAME
 * @property string $YEAR
 * @property integer $candidate_id
 */
class Results2014 extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidate_id'], 'integer'],
            [['CENTRE_CODE', 'index_no', 'name', 'mean_grade', 'aggrigate_p', 'SBJ1', 'SBJ1_grade', 'SBJ2', 'SBJ2_grade', 'SBJ3', 'SBJ3_grade', 'SBJ4', 'SBJ4_grade', 'SBJ5', 'SBJ5_grade', 'SBJ6', 'SBJ6_grade', 'SBJ7', 'SBJ7_grade', 'SBJ8', 'SBJ8_grade', 'SBJ9', 'SBJ9_grade', 'CENTRE_NAME', 'YEAR'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'results_2014';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CENTRE_CODE' => 'Centre  Code',
            'index_no' => 'Index No',
            'name' => 'Name',
            'mean_grade' => 'Mean Grade',
            'aggrigate_p' => 'Aggrigate P',
            'SBJ1' => 'Sbj1',
            'SBJ1_grade' => 'Sbj1 Grade',
            'SBJ2' => 'Sbj2',
            'SBJ2_grade' => 'Sbj2 Grade',
            'SBJ3' => 'Sbj3',
            'SBJ3_grade' => 'Sbj3 Grade',
            'SBJ4' => 'Sbj4',
            'SBJ4_grade' => 'Sbj4 Grade',
            'SBJ5' => 'Sbj5',
            'SBJ5_grade' => 'Sbj5 Grade',
            'SBJ6' => 'Sbj6',
            'SBJ6_grade' => 'Sbj6 Grade',
            'SBJ7' => 'Sbj7',
            'SBJ7_grade' => 'Sbj7 Grade',
            'SBJ8' => 'Sbj8',
            'SBJ8_grade' => 'Sbj8 Grade',
            'SBJ9' => 'Sbj9',
            'SBJ9_grade' => 'Sbj9 Grade',
            'CENTRE_NAME' => 'Centre  Name',
            'YEAR' => 'Year',
            'candidate_id' => 'Candidate ID',
        ];
    }
}
