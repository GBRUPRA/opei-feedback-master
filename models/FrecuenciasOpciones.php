<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "frecuencias_opciones".
 *
 * @property integer $id
 * @property string $frec
 */
class FrecuenciasOpciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frecuencias_opciones';
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
            'options' => 'Opciones',
        ];
    }
}
