<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string $class_name
 * @property string $type
 * @property string $trainer
 * @property string|null $startAt
 * @property string|null $endAt
 * @property int $spots
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class_name', 'type', 'trainer'], 'required'],
            [['startAt', 'endAt'], 'safe'],
            [['spots'], 'integer'],
            [['class_name', 'trainer'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_name' => 'Class Name',
            'type' => 'Type',
            'trainer' => 'Trainer',
            'startAt' => 'Start At',
            'endAt' => 'End At',
            'spots' => 'Spots',
        ];
    }
}
