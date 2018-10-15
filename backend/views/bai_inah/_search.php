<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bai_inahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bai-inah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref') ?>

    <?= $form->field($model, 'client_ref') ?>

    <?= $form->field($model, 'court_name') ?>

    <?= $form->field($model, 'court_person') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'plantif_name') ?>

    <?php // echo $form->field($model, 'plantif_address') ?>

    <?php // echo $form->field($model, 'def_name') ?>

    <?php // echo $form->field($model, 'def_address') ?>

    <?php // echo $form->field($model, 'def_ic') ?>

    <?php // echo $form->field($model, 'loan_type') ?>

    <?php // echo $form->field($model, 'loan_amount') ?>

    <?php // echo $form->field($model, 'application_date') ?>

    <?php // echo $form->field($model, 'sale_agreement_date') ?>

    <?php // echo $form->field($model, 'purchase_agreement_date') ?>

    <?php // echo $form->field($model, 'asset_detail') ?>

    <?php // echo $form->field($model, 'asset_price') ?>

    <?php // echo $form->field($model, 'asset_selling_price') ?>

    <?php // echo $form->field($model, 'payment_period') ?>

    <?php // echo $form->field($model, 'instalment') ?>

    <?php // echo $form->field($model, 'issue_date') ?>

    <?php // echo $form->field($model, 'outstanding_payment') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
