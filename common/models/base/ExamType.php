<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "exam_type".
 *
 * @property integer $exam_type_id
 * @property string $exam_type_name
 *
 * @property \common\models\User[] $users
 */
class ExamType extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exam_type_name'], 'required'],
            [['exam_type_name'], 'string', 'max' => 50],
            [['exam_type_name'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam_type';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'exam_type_id' => 'Exam Type ID',
            'exam_type_name' => 'Exam Type Name',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(\common\models\User::className(), ['exam_type' => 'exam_type_id']);
    }
    }
