<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "kcse_candidate".
 *
 * @property integer $candidate_id
 * @property string $index_no
 * @property string $year
 * @property string $name
 * @property string $mean_grade
 * @property integer $aggrigate_point
 */
class KcseCandidate extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['index_no', 'year', 'name', 'mean_grade', 'aggrigate_point'], 'required'],
            [['year'], 'safe'],
            [['aggrigate_point'], 'integer'],
            [['index_no'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 50],
            [['mean_grade'], 'string', 'max' => 2]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kcse_candidate';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'candidate_id' => 'Candidate ID',
            'index_no' => 'Index No',
            'year' => 'Year',
            'name' => 'Name',
            'mean_grade' => 'Mean Grade',
            'aggrigate_point' => 'Aggrigate Point',
        ];
    }
}
