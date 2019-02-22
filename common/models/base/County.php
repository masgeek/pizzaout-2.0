<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "county".
 *
 * @property string $county_code
 * @property string $county_name
 */
class County extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['county_code', 'county_name'], 'required'],
            [['county_code'], 'string', 'max' => 3],
            [['county_name'], 'string', 'max' => 100]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'county';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'county_code' => 'County Code',
            'county_name' => 'County Name',
        ];
    }
}
