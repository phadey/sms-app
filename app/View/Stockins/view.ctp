<div class="stockins view">
<h2><?php echo __('Stockin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stockin['Stockin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stockin['Product']['name'], array('controller' => 'products', 'action' => 'view', $stockin['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($stockin['Stockin']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($stockin['Stockin']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stockin'), array('action' => 'edit', $stockin['Stockin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stockin'), array('action' => 'delete', $stockin['Stockin']['id']), array(), __('Are you sure you want to delete # %s?', $stockin['Stockin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockin'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
