<div class="stockouts form">
<?php echo $this->Form->create('Stockout'); ?>
	<fieldset>
		<legend><?php echo __('Edit Stockout'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('salesorder_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stockout.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Stockout.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('controller' => 'salesorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
	</ul>
</div>
