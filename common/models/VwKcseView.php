<?php

namespace common\models;

use \common\models\base\VwKcseView as BaseVwKcseView;

/**
 * This is the model class for table "vw_kcse_view".
 */
class VwKcseView extends BaseVwKcseView
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['mean_grade', 'aggrigate_point', 'name', 'index_no', 'centre_name', 'subcounty_name', 'subcounty_code'], 'required'],
            [['aggrigate_point', 'candidate_id'], 'integer'],
            [['YEAR', 'SUBJECT_CODE'], 'string', 'max' => 10],
            [['mean_grade'], 'string', 'max' => 2],
            [['name', 'CENTER_CODE'], 'string', 'max' => 50],
            [['index_no'], 'string', 'max' => 12],
            [['subject_name', 'centre_name'], 'string', 'max' => 255],
            [['subcounty_name'], 'string', 'max' => 100],
            [['subcounty_code'], 'string', 'max' => 3]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
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
