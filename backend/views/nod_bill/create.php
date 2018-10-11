<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nod_bill */

$this->title = Yii::t('app', 'Create Not Bill');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Not Bills'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="not-bill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
