<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%bai_inah}}".
 *
 * @property int $id
 * @property string $ref
 * @property string $client_ref
 * @property string $court_name
 * @property string $court_person
 * @property string $year
 * @property string $plantif_name
 * @property string $plantif_address
 * @property string $def_name
 * @property string $def_address
 * @property string $def_ic
 * @property string $loan_type
 * @property string $loan_amount
 * @property string $application_date
 * @property string $sale_agreement_date
 * @property string $purchase_agreement_date
 * @property string $asset_detail
 * @property string $asset_price
 * @property string $asset_selling_price
 * @property string $payment_period
 * @property string $instalment
 * @property string $issue_date
 * @property string $outstanding_payment
 */
class Bai_inah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%bai_inah}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref'], 'required'],
            [['year', 'application_date', 'sale_agreement_date', 'purchase_agreement_date', 'issue_date'], 'safe'],
            [['loan_amount', 'asset_price', 'asset_selling_price', 'instalment', 'outstanding_payment'], 'number'],
            [['ref', 'client_ref', 'def_ic', 'loan_type', 'payment_period'], 'string', 'max' => 32],
            [['court_name', 'court_person', 'plantif_name', 'plantif_address', 'def_name', 'def_address', 'asset_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ref' => Yii::t('app', 'Ref'),
            'client_ref' => Yii::t('app', 'Client Ref'),
            'court_name' => Yii::t('app', 'Court Name'),
            'court_person' => Yii::t('app', 'Court Person'),
            'year' => Yii::t('app', 'Year'),
            'plantif_name' => Yii::t('app', 'Plantif Name'),
            'plantif_address' => Yii::t('app', 'Plantif Address'),
            'def_name' => Yii::t('app', 'Def Name'),
            'def_address' => Yii::t('app', 'Def Address'),
            'def_ic' => Yii::t('app', 'Def Ic'),
            'loan_type' => Yii::t('app', 'Loan Type'),
            'loan_amount' => Yii::t('app', 'Loan Amount'),
            'application_date' => Yii::t('app', 'Application Date'),
            'sale_agreement_date' => Yii::t('app', 'Sale Agreement Date'),
            'purchase_agreement_date' => Yii::t('app', 'Purchase Agreement Date'),
            'asset_detail' => Yii::t('app', 'Asset Detail'),
            'asset_price' => Yii::t('app', 'Asset Price'),
            'asset_selling_price' => Yii::t('app', 'Asset Selling Price'),
            'payment_period' => Yii::t('app', 'Payment Period'),
            'instalment' => Yii::t('app', 'Instalment'),
            'issue_date' => Yii::t('app', 'Issue Date'),
            'outstanding_payment' => Yii::t('app', 'Outstanding Payment'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return Bai_inahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new Bai_inahQuery(get_called_class());
    }
}
