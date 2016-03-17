<div class="invoices index">
	<h2><?php echo __('Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('salesorder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('totalpay'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_method'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_date'); ?></th>
			<th><?php echo $this->Paginator->sort('bal_stat'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_stat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($invoices as $invoice): ?>
	<tr>
		<td><?php echo h($invoice['Invoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Salesorder']['id'], array('controller' => 'salesorders', 'action' => 'view', $invoice['Salesorder']['id'])); ?>
		</td>
		<td><?php echo h($invoice['Invoice']['total']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['totalpay']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['pay_method']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['pay_date']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['bal_stat']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['pay_stat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoice['Invoice']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invoice['Invoice']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('controller' => 'salesorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
	</ul>
</div>
