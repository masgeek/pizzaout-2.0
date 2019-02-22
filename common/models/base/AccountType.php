<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "account_type".
 *
 * @property integer $account_type_id
 * @property string $account_type
 * @property string $module_name
 * @property string $description
 * @property string $class
 * @property integer $active
 *
 * @property \common\models\User[] $users
 */
class AccountType extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_type', 'module_name'], 'required'],
            [['description'], 'string'],
            [['account_type', 'module_name'], 'string', 'max' => 50],
            [['class'], 'string', 'max' => 10],
            [['active'], 'string', 'max' => 1],
            [['account_type'], 'unique'],
            [['module_name'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_type';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_type_id' => 'Account Type ID',
            'account_type' => 'Account Type',
            'module_name' => 'Module Name',
            'description' => 'Description',
            'class' => 'Class',
            'active' => 'Active',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(\common\models\User::className(), ['account_type' => 'account_type_id']);
    }
    }
