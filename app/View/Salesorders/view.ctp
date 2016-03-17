<div class="salesorders view">
<h2><?php echo __('Salesorder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Name'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['cust_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Address'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['cust_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Phone'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['cust_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Email'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['cust_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Po'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['cust_po']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Type'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['cust_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Terms'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['pay_terms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Due'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['pay_due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Est Ship'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['est_ship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['shipping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Stat'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['pay_stat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Submited'); ?></dt>
		<dd>
			<?php echo h($salesorder['Salesorder']['order_submited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesorder['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $salesorder['Invoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salesorder'), array('action' => 'edit', $salesorder['Salesorder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salesorder'), array('action' => 'delete', $salesorder['Salesorder']['id']), array(), __('Are you sure you want to delete # %s?', $salesorder['Salesorder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salesorders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salesorder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('controller' => 'stockouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('controller' => 'stockouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($salesorder['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Salesorder Id'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Totalpay'); ?></th>
		<th><?php echo __('Pay Method'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Pay Date'); ?></th>
		<th><?php echo __('Bal Stat'); ?></th>
		<th><?php echo __('Pay Stat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salesorder['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['salesorder_id']; ?></td>
			<td><?php echo $invoice['total']; ?></td>
			<td><?php echo $invoice['totalpay']; ?></td>
			<td><?php echo $invoice['pay_method']; ?></td>
			<td><?php echo $invoice['remarks']; ?></td>
			<td><?php echo $invoice['pay_date']; ?></td>
			<td><?php echo $invoice['bal_stat']; ?></td>
			<td><?php echo $invoice['pay_stat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), array(), __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stockouts'); ?></h3>
	<?php if (!empty($salesorder['Stockout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Salesorder Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salesorder['Stockout'] as $stockout): ?>
		<tr>
			<td><?php echo $stockout['id']; ?></td>
			<td><?php echo $stockout['product_id']; ?></td>
			<td><?php echo $stockout['quantity']; ?></td>
			<td><?php echo $stockout['salesorder_id']; ?></td>
			<td><?php echo $stockout['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stockouts', 'action' => 'view', $stockout['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stockouts', 'action' => 'edit', $stockout['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stockouts', 'action' => 'delete', $stockout['id']), array(), __('Are you sure you want to delete # %s?', $stockout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stockout'), array('controller' => 'stockouts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
