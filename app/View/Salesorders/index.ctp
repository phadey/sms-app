<div class="salesorders index">
	<h2><?php echo __('Salesorders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_name'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_address'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_email'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_po'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_type'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_terms'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_due'); ?></th>
			<th><?php echo $this->Paginator->sort('est_ship'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
			<th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_stat'); ?></th>
			<th><?php echo $this->Paginator->sort('order_submited'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($salesorders as $salesorder): ?>
	<tr>
		<td><?php echo h($salesorder['Salesorder']['id']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['cust_name']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['cust_address']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['cust_phone']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['cust_email']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['cust_po']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['cust_type']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['pay_terms']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['pay_due']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['est_ship']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['discount']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['shipping']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['total']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['pay_stat']); ?>&nbsp;</td>
		<td><?php echo h($salesorder['Salesorder']['order_submited']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesorder['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $salesorder['Invoice']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salesorder['Salesorder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salesorder['Salesorder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salesorder['Salesorder']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $salesorder['Salesorder']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Salesorder'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('controller' => 'stockouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('controller' => 'stockouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
