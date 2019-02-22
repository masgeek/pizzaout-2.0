<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "vw_kcse_view".
 *
 * @property string $YEAR
 * @property string $mean_grade
 * @property integer $aggrigate_point
 * @property string $name
 * @property integer $candidate_id
 * @property string $index_no
 * @property string $CENTER_CODE
 * @property string $subject_name
 * @property string $SUBJECT_CODE
 * @property string $centre_name
 * @property string $subcounty_name
 * @property string $subcounty_code
 */
class VwKcseView extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mean_grade', 'aggrigate_point', 'name', 'index_no', 'centre_name', 'subcounty_name', 'subcounty_code'], 'required'],
            [['aggrigate_point', 'candidate_id'], 'integer'],
            [['YEAR', 'SUBJECT_CODE'], 'string', 'max' => 10],
            [['mean_grade'], 'string', 'max' => 2],
            [['name', 'CENTER_CODE'], 'string', 'max' => 50],
            [['index_no'], 'string', 'max' => 12],
            [['subject_name', 'centre_name'], 'string', 'max' => 255],
            [['subcounty_name'], 'string', 'max' => 100],
            [['subcounty_code'], 'string', 'max' => 3]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vw_kcse_view';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'YEAR' => 'Year',
            'mean_grade' => 'Mean Grade',
            'aggrigate_point' => 'Aggrigate Point',
            'name' => 'Name',
            'candidate_id' => 'Candidate ID',
            'index_no' => 'Index No',
            'CENTER_CODE' => 'Center  Code',
            'subject_name' => 'Subject Name',
            'SUBJECT_CODE' => 'Subject  Code',
            'centre_name' => 'Centre Name',
            'subcounty_name' => 'Subcounty Name',
            'subcounty_code' => 'Subcounty Code',
        ];
    }
}
