<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sometido".
 *
 * @property integer $id
 * @property string $frecuencia
 * @property integer $respuesta_1
 * @property integer $respuesta_2
 * @property integer $respuesta_3
 * @property integer $respuesta_4
 * @property integer $respuesta_5
 * @property string $clasificacion
 * @property string $sugerencias_recomendaciones
 */
class Sometido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sometido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['frecuencia', 'respuesta_1', 'respuesta_2', 'respuesta_3', 'respuesta_4', 'respuesta_5', 'clasificacion'], 'required'],
            [['respuesta_1', 'respuesta_2', 'respuesta_3', 'respuesta_4', 'respuesta_5'], 'integer'],
            [['sugerencias_recomendaciones'], 'string'],
            [['frecuencia', 'clasificacion'], 'string', 'max' => 68],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'frecuencia' => 'Frecuencia',
            'respuesta_1' => 'Respuesta 1',
            'respuesta_2' => 'Respuesta 2',
            'respuesta_3' => 'Respuesta 3',
            'respuesta_4' => 'Respuesta 4',
            'respuesta_5' => 'Respuesta 5',
            'clasificacion' => 'Clasificación',
            'sugerencias_recomendaciones' => 'Sugerencias y Recomendaciones',
        ];
    }
}
