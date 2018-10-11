<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%nod_bill}}".
 *
 * @property int $id
 * @property string $ref_num
 * @property int $date
 * @property string $def_name
 * @property string $def_address
 * @property string $plantif_name
 * @property string $plantif_number
 * @property int $loan_type
 * @property string $loan_amount
 * @property int $date_1
 * @property string $overdue
 * @property string $total
 */
class Nod_bill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nod_bill}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::classname(),
                'createdAtAttribute' => 'date',
                'updatedAtAttribute' => false,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref_num', 'def_name'], 'required'],
            [['loan_type'], 'integer'],
            [['date_1'], 'date', 'format' => 'Y-m-d'],
            [['loan_amount', 'total'], 'number'],
            [['ref_num', 'def_name', 'plantif_name', 'overdue'], 'string', 'max' => 32],
            [['def_address'], 'string', 'max' => 255],
            [['plantif_number'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ref_num' => Yii::t('app', 'Ref Num'),
            'date' => Yii::t('app', 'Created Date'),
            'def_name' => Yii::t('app', 'Defenden Name'),
            'def_address' => Yii::t('app', 'Deffenden Address'),
            'plantif_name' => Yii::t('app', 'Plantif Name'),
            'plantif_number' => Yii::t('app', 'Plantif Number'),
            'loan_type' => Yii::t('app', 'Loan Type'),
            'loan_amount' => Yii::t('app', 'Loan Amount'),
            'date_1' => Yii::t('app', 'Date 1'),
            'overdue' => Yii::t('app', 'Overdue'),
            'total' => Yii::t('app', 'Total'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return RedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RedQuery(get_called_class());
    }
}
