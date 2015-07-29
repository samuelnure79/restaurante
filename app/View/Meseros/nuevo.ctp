<h2>Crear Mesero</h2>
<?php
    echo $this->Html->link('Volver Atras...',array('controller'=>'meseros','action'=>'index'));
?>
<?php
    echo $this->Form->create('Mesero');
    echo $this->Form->input('dni');
    echo $this->Form->input('nombre');
    echo $this->Form->input('apellido');
    echo $this->Form->input('telefono');
    echo $this->Form->end('Crear Mesero');
?>