<?php
namespace app\models;

use yii\base\Model;

class UserForm extends Model{
    //Recibe la respuesta de los primeros radio buttons
    public $frecuencia;
    //Campos dentro de la tabla, están en orden y cada una recibe el valor seleccionado de esa fila
    public $tiempo_solicitar;
    public $informacion_provista;
    public $atencion_brindada;
    public $formato_solicitud;
    public $nivel_satisfecho;
    //
    public $clasificacion;
    //
    public $caja_sugerencias;

    public function insertar_cuestionario(){
        
        return [
            [['frecuencia','tiempo_solicitar','informacion_provista','atencion_brindada','formato_solicitud','nivel_satisfecho','clasificacion','caja_sugerencias'], 'required']
        ];
    }


}