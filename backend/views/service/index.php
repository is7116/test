<?php

use common\models\Service;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\Service */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            'code',
            'price',
            [
                'attribute' => 'status',
                'filter' => Service::statusLabels(),
                'value' => function (Service $service) {
                    return ArrayHelper::getValue(Service::statusLabels(), $service->status);
                }
            ],
            'expires_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
