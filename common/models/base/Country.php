<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "country".
 *
 * @property string $code
 * @property string $country
 * @property integer $population
 */
class Country extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'country', 'population'], 'required'],
            [['population'], 'integer'],
            [['code', 'country'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'country' => 'Country',
            'population' => 'Population',
        ];
    }
}
