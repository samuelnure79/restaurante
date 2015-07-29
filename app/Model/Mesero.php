<?php
    class Mesero extends AppModel
    {
        public $virtualFields = array('nombre_completo'=>'CONCAT(Mesero.nombre, " ", Mesero.apellido)');
        
        
        public $validate = array('dni'=>array('notblank'=>array('rule'=>'notBlank'),
                                              'numeric'=>array('rule'=>'numeric', 'message'=>'Solo Numeros'),
                                              'unique'=>array('rule'=>'isUnique', 'message'=>'DNI existente!! Cambielo!!')), 
                'nombre'=>array('rule'=>'notBlank'),
                'apellido'=>array('rule'=>'notBlank'), 'telefono'=>array('notblank'=>array('rule'=>'notBlank'), 'numeric'=>array('rule'=>'numeric', 'message'=>'Solo Numeros')));
        
        public $hasMany = array(
                'Mesa' => array(
                'className'=>'Mesa',
                'foreignKey'=>'mesero_id',
                'conditions'=>'',
                'order'=>'Mesa.serie DESC',
                'depend'=> false
            )
        );
    }
?>