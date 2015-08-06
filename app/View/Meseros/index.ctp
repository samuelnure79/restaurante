<h2>LISTA DE MESEROS</h2>
<?php
    echo $this->Html->link('Crear Mesero',array('controller'=>'meseros','action'=>'nuevo'));
?>
<br />
<?php
    echo $this->Html->link('Crear Mesa',array('controller'=>'mesas','action'=>'nuevo'));
?>

<div class="page-header">
    <h2><?php echo ('Meseros'); ?></h2>
</div>

<div class="col-md-10">
<table class="table table-striped" >
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php foreach($meseros as $mesero): ?>
        <tr>
            <td><?php echo $mesero['Mesero']['id']; ?> </td>
            <td><?php echo $mesero['Mesero']['nombre']; ?></td>
            <td><?php echo $mesero['Mesero']['apellido']; ?></td>
            <td><?php echo $this->Html->link('Detalle', array('controller'=>'meseros','action'=>'ver', $mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-info')); ?></td>
            <td><?php echo $this->Html->link('Editar', array('controller'=>'meseros','action'=>'editar', $mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default')); ?></td>
            <td><?php echo $this->Form->postLink('Eliminar', array('action'=>'eliminar', $mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-danger'), array('confirm'=>'Eliminar a '.$mesero['Mesero']['nombre'].'?')); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>