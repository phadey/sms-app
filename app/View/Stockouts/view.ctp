<div class="stockouts view">
<h2><?php echo __('Stockout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stockout['Product']['name'], array('controller' => 'products', 'action' => 'view', $stockout['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salesorder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stockout['Salesorder']['id'], array('controller' => 'salesorders', 'action' => 'view', $stockout['Salesorder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stockout'), array('action' => 'edit', $stockout['Stockout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stockout'), array('action' => 'delete', $stockout['Stockout']['id']), array(), __('Are you sure you want to delete # %s?', $stockout['Stockout']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('controller' => 'salesorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
	</ul>
</div>
