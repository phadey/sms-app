<div class="orderlists view">
<h2><?php echo __('Orderlist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderlist['Orderlist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderlist['Product']['name'], array('controller' => 'products', 'action' => 'view', $orderlist['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($orderlist['Orderlist']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orderlist'), array('action' => 'edit', $orderlist['Orderlist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orderlist'), array('action' => 'delete', $orderlist['Orderlist']['id']), array(), __('Are you sure you want to delete # %s?', $orderlist['Orderlist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderlist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
