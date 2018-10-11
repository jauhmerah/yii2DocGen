<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Nod_bill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="not-bill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'ref_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'def_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'def_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plantif_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plantif_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loan_type')->dropDownList(
        ['Type 1','Type 2', 'Type 3'],
        [
            'prompt' => 'Select loan type',
        ]
        ) ?>

    <?= $form->field($model, 'loan_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_1')->widget(DatePicker::className(),[
            'pluginOptions' => [
                'format' => 'yyyy-m-d',
            ]
        ]) ?>

    <?= $form->field($model, 'overdue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
