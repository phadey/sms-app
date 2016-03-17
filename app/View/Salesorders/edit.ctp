<div class="salesorders form">
<?php echo $this->Form->create('Salesorder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Salesorder'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cust_name');
		echo $this->Form->input('cust_address');
		echo $this->Form->input('cust_phone');
		echo $this->Form->input('cust_email');
		echo $this->Form->input('cust_po');
		echo $this->Form->input('cust_type');
		echo $this->Form->input('pay_terms');
		echo $this->Form->input('pay_due');
		echo $this->Form->input('est_ship');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('discount');
		echo $this->Form->input('shipping');
		echo $this->Form->input('total');
		echo $this->Form->input('pay_stat');
		echo $this->Form->input('order_submited');
		echo $this->Form->input('invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Salesorder.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Salesorder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('controller' => 'stockouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('controller' => 'stockouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
