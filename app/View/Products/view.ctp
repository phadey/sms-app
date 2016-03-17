<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Type']['name'], array('controller' => 'types', 'action' => 'view', $product['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($product['Product']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Measurament'); ?></dt>
		<dd>
			<?php echo h($product['Product']['measurament']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderlists'), array('controller' => 'orderlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderlist'), array('controller' => 'orderlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockins'), array('controller' => 'stockins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockin'), array('controller' => 'stockins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('controller' => 'stockouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('controller' => 'stockouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orderlists'); ?></h3>
	<?php if (!empty($product['Orderlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Orderlist'] as $orderlist): ?>
		<tr>
			<td><?php echo $orderlist['id']; ?></td>
			<td><?php echo $orderlist['product_id']; ?></td>
			<td><?php echo $orderlist['quantity']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orderlists', 'action' => 'view', $orderlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orderlists', 'action' => 'edit', $orderlist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orderlists', 'action' => 'delete', $orderlist['id']), array(), __('Are you sure you want to delete # %s?', $orderlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Orderlist'), array('controller' => 'orderlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stockins'); ?></h3>
	<?php if (!empty($product['Stockin'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Stockin'] as $stockin): ?>
		<tr>
			<td><?php echo $stockin['id']; ?></td>
			<td><?php echo $stockin['product_id']; ?></td>
			<td><?php echo $stockin['quantity']; ?></td>
			<td><?php echo $stockin['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stockins', 'action' => 'view', $stockin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stockins', 'action' => 'edit', $stockin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stockins', 'action' => 'delete', $stockin['id']), array(), __('Are you sure you want to delete # %s?', $stockin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stockin'), array('controller' => 'stockins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stockouts'); ?></h3>
	<?php if (!empty($product['Stockout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Salesorder Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Stockout'] as $stockout): ?>
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
