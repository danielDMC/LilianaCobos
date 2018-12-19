<div class="users index container">
	<h2><?php echo __('Users'); ?></h2>
		<?php echo $this->Html->link(__('New User'), array('action' => 'add'),array('class'=>'btn btn-secondary mb-4 ')); ?>
	<table class="table table-light">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']),array('class'=>'btn btn-primary mx-2 my-2')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>'btn btn-warning mx-2 my-2')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']),'class'=>'btn btn-danger mx-2 my-2')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>

	
