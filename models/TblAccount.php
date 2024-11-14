<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_account".
 *
 * @property int $account_id
 * @property string $account_mail
 * @property int $roles_id
 * @property string $account_name
 * @property string $account_password
 */
class TblAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roles_id', 'account_name', 'account_password'], 'required'],
            [['roles_id'], 'integer'],
            [['account_mail'], 'string', 'max' => 255],
            [['account_name'], 'string', 'max' => 200],
            [['account_password'], 'string', 'max' => 50],
            [['account_mail'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'Account ID',
            'account_mail' => 'Account Mail',
            'roles_id' => 'Roles ID',
            'account_name' => 'Account Name',
            'account_password' => 'Account Password',
        ];
    }
}
