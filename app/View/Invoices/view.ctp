<div class="invoices view">
<h2><?php echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salesorder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Salesorder']['id'], array('controller' => 'salesorders', 'action' => 'view', $invoice['Salesorder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Totalpay'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['totalpay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Method'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['pay_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['pay_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bal Stat'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['bal_stat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Stat'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['pay_stat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), array(), __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('controller' => 'salesorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Salesorders'); ?></h3>
	<?php if (!empty($invoice['Salesorder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cust Name'); ?></th>
		<th><?php echo __('Cust Address'); ?></th>
		<th><?php echo __('Cust Phone'); ?></th>
		<th><?php echo __('Cust Email'); ?></th>
		<th><?php echo __('Cust Po'); ?></th>
		<th><?php echo __('Cust Type'); ?></th>
		<th><?php echo __('Pay Terms'); ?></th>
		<th><?php echo __('Pay Due'); ?></th>
		<th><?php echo __('Est Ship'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th><?php echo __('Shipping'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Pay Stat'); ?></th>
		<th><?php echo __('Order Submited'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoice['Salesorder'] as $salesorder): ?>
		<tr>
			<td><?php echo $salesorder['id']; ?></td>
			<td><?php echo $salesorder['cust_name']; ?></td>
			<td><?php echo $salesorder['cust_address']; ?></td>
			<td><?php echo $salesorder['cust_phone']; ?></td>
			<td><?php echo $salesorder['cust_email']; ?></td>
			<td><?php echo $salesorder['cust_po']; ?></td>
			<td><?php echo $salesorder['cust_type']; ?></td>
			<td><?php echo $salesorder['pay_terms']; ?></td>
			<td><?php echo $salesorder['pay_due']; ?></td>
			<td><?php echo $salesorder['est_ship']; ?></td>
			<td><?php echo $salesorder['subtotal']; ?></td>
			<td><?php echo $salesorder['discount']; ?></td>
			<td><?php echo $salesorder['shipping']; ?></td>
			<td><?php echo $salesorder['total']; ?></td>
			<td><?php echo $salesorder['pay_stat']; ?></td>
			<td><?php echo $salesorder['order_submited']; ?></td>
			<td><?php echo $salesorder['invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'salesorders', 'action' => 'view', $salesorder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'salesorders', 'action' => 'edit', $salesorder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'salesorders', 'action' => 'delete', $salesorder['id']), array(), __('Are you sure you want to delete # %s?', $salesorder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Salesorder'), array('controller' => 'salesorders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
