<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6">
		<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id' ,array('class'=>'form-control'));
		echo $this->Form->input('username' ,array('class'=>'form-control'));
		echo $this->Form->input('email' ,array('class'=>'form-control'));
		echo $this->Form->input('password', array('class'=>'form-control','type'=>'text'));
		
	?>
	
	</fieldset>
<button type="submit" class="btn btn-block btn-warning my-3">Modificar</button>
	</div>
</div>
</div>



		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>


