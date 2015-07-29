<?php
    class Mesa extends AppModel{
        
        public $belongsTo = array(
                'Mesero' => array(
                    'classname'=>'Mesero',
                    'foreignKey'=>'mesero_id'
            )
        );
    }
?>