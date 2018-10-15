<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bai_inah */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bai Inahs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bai-inah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ref',
            'client_ref',
            'court_name',
            'court_person',
            'year',
            'plantif_name',
            'plantif_address',
            'def_name',
            'def_address',
            'def_ic',
            'loan_type',
            'loan_amount',
            'application_date',
            'sale_agreement_date',
            'purchase_agreement_date',
            'asset_detail',
            'asset_price',
            'asset_selling_price',
            'payment_period',
            'instalment',
            'issue_date',
            'outstanding_payment',
        ],
    ]) ?>

</div>
