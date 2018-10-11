<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nod_billSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="not-bill-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref_num') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'def_name') ?>

    <?= $form->field($model, 'def_address') ?>

    <?php // echo $form->field($model, 'plantif_name') ?>

    <?php // echo $form->field($model, 'plantif_number') ?>

    <?php // echo $form->field($model, 'loan_type') ?>

    <?php // echo $form->field($model, 'loan_amount') ?>

    <?php // echo $form->field($model, 'date_1') ?>

    <?php // echo $form->field($model, 'overdue') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
