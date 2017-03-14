<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acuerdos".
 *
 * @property integer $id
 * @property string $options
 */
class Acuerdos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acuerdos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['options'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'options' => 'Options',
        ];
    }
}
