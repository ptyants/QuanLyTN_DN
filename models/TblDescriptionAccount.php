<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_description_account".
 *
 * @property int $description_account_id
 * @property int $account_id
 * @property int $phone
 * @property string $sex
 * @property string|null $address
 * @property string $nation
 * @property int $id_card
 * @property string $religion
 *
 * @property TblAccount $account
 */
class TblDescriptionAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_description_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_id', 'phone', 'sex', 'nation', 'id_card', 'religion'], 'required'],
            [['account_id', 'phone', 'id_card'], 'integer'],
            [['sex', 'nation', 'religion'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 200],
            [['phone'], 'unique'],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblAccount::class, 'targetAttribute' => ['account_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'description_account_id' => 'Description Account ID',
            'account_id' => 'Account ID',
            'phone' => 'Phone',
            'sex' => 'Sex',
            'address' => 'Address',
            'nation' => 'Nation',
            'id_card' => 'Id Card',
            'religion' => 'Religion',
        ];
    }

    /**
     * Gets query for [[Account]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(TblAccount::class, ['account_id' => 'account_id']);
    }
}
