<?php

namespace common\models;

use \common\models\base\ExamType as BaseExamType;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "exam_type".
 */
class ExamType extends BaseExamType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
            [
                [['exam_type_name'], 'required'],
                [['exam_type_name'], 'string', 'max' => 50],
                [['exam_type_name'], 'unique']
            ]);
    }


    /**
     * @return array
     */
    public static function GetExamTypes()
    {
        $examTypes = self::find()
            ->all();
        $examData = ArrayHelper::map($examTypes, 'exam_type_id', 'exam_type_name');

        return $examData;
    }
}
