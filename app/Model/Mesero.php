<?php
    class Mesero extends AppModel
    {
        public $validate = array('dni'=>array('notblank'=>array('rule'=>'notBlank'), 'numeric'=>array('rule'=>'numeric', 'message'=>'Solo Numeros')), 
                'nombre'=>array('rule'=>'notBlank'),
                'apellido'=>array('rule'=>'notBlank'), 'telefo'=>array('notblank'=>array('rule'=>'notBlank'), 'numeric'=>array('rule'=>'numeric', 'message'=>'Solo Numeros')));
                
    }
?>