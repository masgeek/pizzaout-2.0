<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "authorization_codes".
 *
 * @property integer $id
 * @property string $code
 * @property integer $expires_at
 * @property integer $user_id
 * @property string $app_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\User $user
 */
class AuthorizationCodes extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'expires_at', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['expires_at', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['code'], 'string', 'max' => 150],
            [['app_id'], 'string', 'max' => 200]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authorization_codes';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'expires_at' => 'Expires At',
            'user_id' => 'User ID',
            'app_id' => 'App ID',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }
    }
