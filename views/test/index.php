<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';

?>
<div class="test-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'sorter'=> false,
        'summary'=> '',
        'tableOptions' => ['class' => 'test-table table table-striped table-bordered'],

        'columns' => [
            [
                'label' => 'Class name',
                'value' => function ($model) {
                    return $model->class_name;
                }
            ],
            [
                'label' => 'Type',
                'value' => function ($model) {
                    return $model->type;
                }
            ],
            [
                'label' => 'Trainer',
                'value' => function ($model) {
                    return $model->trainer;
                }
            ],
            [
                'label' => 'Hours',
                'value' => function ($model) {
                    return $model->startAt . ' - ' . $model->endAt;
                }
            ],
            [
                'label' => 'Spots',
                'value' => function ($model) {
                    return $model->spots;
                }
            ],


//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
