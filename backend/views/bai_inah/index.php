<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\Bai_inahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bai Inahs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bai-inah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Bai Inah'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ref',
            // 'client_ref',
            'court_name',
            'court_person',
            //'year',
            'plantif_name',
            // 'plantif_address',
            'def_name',
            //'def_address',
            //'def_ic',
            'loan_type',
            'loan_amount',
            //'application_date',
            //'sale_agreement_date',
            //'purchase_agreement_date',
            //'asset_detail',
            //'asset_price',
            //'asset_selling_price',
            //'payment_period',
            //'instalment',
            //'issue_date',
            //'outstanding_payment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
