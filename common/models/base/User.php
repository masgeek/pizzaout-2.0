<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $account_type
 * @property string $exam_ref
 * @property integer $exam_type
 * @property string $exam_year
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\AccessTokens[] $accessTokens
 * @property \common\models\AuthorizationCodes[] $authorizationCodes
 * @property \common\models\AccountType $accountType
 * @property \common\models\ExamType $examType
 */
class User extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'exam_ref', 'exam_year', 'created_at', 'updated_at'], 'required'],
            [['role', 'account_type', 'exam_type', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'exam_ref'], 'string', 'max' => 50],
            [['auth_key', 'exam_year'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['exam_ref', 'exam_year'], 'unique', 'targetAttribute' => ['exam_ref', 'exam_year'], 'message' => 'The combination of Exam Ref and Exam Year has already been taken.']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'role' => 'Role',
            'account_type' => 'Account Type',
            'exam_ref' => 'Exam Ref',
            'exam_type' => 'Exam Type',
            'exam_year' => 'Exam Year',
            'status' => 'Status',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccessTokens()
    {
        return $this->hasMany(\common\models\AccessTokens::className(), ['user_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorizationCodes()
    {
        return $this->hasMany(\common\models\AuthorizationCodes::className(), ['user_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountType()
    {
        return $this->hasOne(\common\models\AccountType::className(), ['account_type_id' => 'account_type']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExamType()
    {
        return $this->hasOne(\common\models\ExamType::className(), ['exam_type_id' => 'exam_type']);
    }
    }
