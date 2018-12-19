
			<?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
<div class="container-fluid">
  <div class="row justify-content-center">
	  <div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Cuenta de Usuario</h3>
				<h5><strong>ID:</strong> <?php echo h($user['User']['id']); ?></h5>
				<h5><strong>Usuario:</strong> <?php echo h($user['User']['username']); ?></h5>
				<h5><strong>email:</strong> <?php echo h($user['User']['email']); ?> </h5>

			</div>
					<div class="text-center">
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>'btn btn-warning mb-3')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']),'class'=>'btn btn-danger mb-3')); ?>
			
						
					</div>
		</div>
		
	  </div>
	  
  </div>

</div>
