<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('total');
		echo $this->Form->input('measurament');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderlists'), array('controller' => 'orderlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderlist'), array('controller' => 'orderlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockins'), array('controller' => 'stockins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockin'), array('controller' => 'stockins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('controller' => 'stockouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('controller' => 'stockouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
