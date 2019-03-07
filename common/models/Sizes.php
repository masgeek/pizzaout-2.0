<?php

namespace common\models;

use \common\models\base\Sizes as BaseSizes;

/**
 * This is the model class for table "tb_sizes".
 */
class Sizes extends BaseSizes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['SIZE_TYPE'], 'required'],
            [['ACTIVE'], 'boolean'],
            [['SIZE_TYPE'], 'string', 'max' => 20],
            [['SIZE_TYPE'], 'unique']
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'SIZE_ID' => 'S I Z E I D',
            'SIZE_TYPE' => 'S I Z E T Y P E',
            'ACTIVE' => 'A C T I V E',
        ];
    }
}
