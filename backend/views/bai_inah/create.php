<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bai_inah */

$this->title = Yii::t('app', 'Create Bai Inah');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bai Inahs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bai-inah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
