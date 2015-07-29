<?php
    class Mesa extends AppModel{
        
        public $belongsTo = array(
                'Mesero' => array(
                    'classname'=>'Mesero',
                    'foreignKey'=>'mesero_id'
            )
        );
        
        public $validate = array(
            'serie'=>array(
                'notBlank'=>array('rule'=>'notBlank'),
                'numeric'=>array('rule'=>'numeric', 'message'=>'Solo Numeros'),
                'unique'=>array('rule'=>'isUnique', 'message'=>'La serie de mesa debe de ser unico'),
            ),
            'puestos'=>array(
                'notBlank'=>array('rule'=>'notBlank'),
                'numeric'=>array('rule'=>'numeric', 'message'=>'Solo Numeros'),
            ),
            'posicion'=>array(
                'rule'=>'notBlank'
            )
        );
    }
?>