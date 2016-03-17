<div class="stockouts index">
	<h2><?php echo __('Stockouts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('salesorder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($stockouts as $stockout): ?>
	<tr>
		<td><?php echo h($stockout['Stockout']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stockout['Product']['name'], array('controller' => 'products', 'action' => 'view', $stockout['Product']['id'])); ?>
		</td>
		<td><?php echo h($stockout['Stockout']['quantity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stockout['Salesorder']['id'], array('controller' => 'salesorders', 'action' => 'view', $stockout['Salesorder']['id'])); ?>
		</td>
		<td><?php echo h($stockout['Stockout']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stockout['Stockout']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stockout['Stockout']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stockout['Stockout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $stockout['Stockout']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Stockout'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('controller' => 'salesorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
	</ul>
</div>
