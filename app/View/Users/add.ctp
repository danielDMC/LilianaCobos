<?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>

<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-6">
  <?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username',array('class'=>'form-control'));
		echo $this->Form->input('email',array('class'=>'form-control'));
		echo $this->Form->input('password',array('class'=>'form-control','type'=>'text'));
	?>
	</fieldset>
<button type="submit" class="btn btn-block btn-warning my-3">guardar</button>
  
  </div>
  
  </div>
</div>

