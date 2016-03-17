<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Invoice'); ?></legend>
	<?php
		echo $this->Form->input('salesorder_id');
		echo $this->Form->input('total');
		echo $this->Form->input('totalpay');
		echo $this->Form->input('pay_method');
		echo $this->Form->input('remarks');
		echo $this->Form->input('pay_date');
		echo $this->Form->input('bal_stat');
		echo $this->Form->input('pay_stat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('controller' => 'salesorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
	</ul>
</div>
