<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\web\View;
use yii\helpers\ArrayHelper;
/* @var $model backend\models\Bai_inah */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
<div class="bai-inah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'court_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'court_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'changeMonth' => false,
            'changeYear'=> true,
            'format' => 'yyyy'

        ]
        ]) ?>

    <?= $form->field($model, 'plantif_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plantif_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'def_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'def_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'def_ic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loan_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loan_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application_date')->widget(DatePicker::classname([
        'options' => ['placeholder' => 'Select Date']
        ])) ?>

    <?= $form->field($model, 'sale_agreement_date')->widget(DatePicker::classname([
        'options' => ['placeholder' => 'Select Date']
        ])) ?>

    <?= $form->field($model, 'purchase_agreement_date')->widget(DatePicker::classname([
        'options' => ['placeholder' => 'Select Date']
        ])) ?>

    <?= $form->field($model, 'asset_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_selling_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instalment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issue_date')->widget(DatePicker::classname([
        'options' => ['placeholder' => 'Select Date']
        ])) ?>

    <?= $form->field($model, 'outstanding_payment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
<style type="text/css">
.ui-datepicker-calendar {
    display: none;
}
</style>
