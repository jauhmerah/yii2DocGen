<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Nod_billSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Nod Bills');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="not-bill-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Nod Bill'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ref_num',
            'date:date',
            'def_name',
            'plantif_name',
            //'plantif_number',
            [
                'attribute' => 'loan_type',
                'value' => function($model) {
                    $arr = ['Type 1', 'Type 2', 'Type 3'];
                    return $arr[$model->loan_type]; 
                }
            ],
            //'loan_amount',
            //'date_1',
            //'overdue',
            //'total',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
