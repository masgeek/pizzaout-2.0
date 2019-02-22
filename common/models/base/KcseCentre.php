<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "kcse_centre".
 *
 * @property string $centre_code
 * @property string $centre_name
 * @property string $subcounty_code
 */
class KcseCentre extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['centre_code', 'centre_name'], 'required'],
            [['centre_code'], 'string', 'max' => 10],
            [['centre_name', 'subcounty_code'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kcse_centre';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'centre_code' => 'Centre Code',
            'centre_name' => 'Centre Name',
            'subcounty_code' => 'Subcounty Code',
        ];
    }
}
