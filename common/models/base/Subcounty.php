<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "subcounty".
 *
 * @property string $subcounty_code
 * @property string $subcounty_name
 * @property string $county_code
 */
class Subcounty extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subcounty_code', 'subcounty_name', 'county_code'], 'required'],
            [['subcounty_code', 'county_code'], 'string', 'max' => 3],
            [['subcounty_name'], 'string', 'max' => 100]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subcounty';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subcounty_code' => 'Subcounty Code',
            'subcounty_name' => 'Subcounty Name',
            'county_code' => 'County Code',
        ];
    }
}
