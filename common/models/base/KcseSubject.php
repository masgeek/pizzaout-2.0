<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "kcse_subject".
 *
 * @property integer $subject_code
 * @property string $subject_name
 */
class KcseSubject extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_code'], 'required'],
            [['subject_code'], 'integer'],
            [['subject_name'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kcse_subject';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_code' => 'Subject Code',
            'subject_name' => 'Subject Name',
        ];
    }
}
