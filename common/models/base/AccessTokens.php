<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "access_tokens".
 *
 * @property integer $id
 * @property string $token
 * @property integer $expires_at
 * @property string $auth_code
 * @property integer $user_id
 * @property string $app_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\User $user
 */
class AccessTokens extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['token', 'expires_at', 'auth_code', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['expires_at', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['token'], 'string', 'max' => 300],
            [['auth_code', 'app_id'], 'string', 'max' => 200]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'access_tokens';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'token' => 'Token',
            'expires_at' => 'Expires At',
            'auth_code' => 'Auth Code',
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
