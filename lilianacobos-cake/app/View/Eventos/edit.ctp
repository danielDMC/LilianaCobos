<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evento.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Evento.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?></li>

<div class="container my-4">
	<div class="row justify-content-center">
		<div class="eventos form">
			<?php echo $this->Form->create('Evento',array('type'=>'file')); ?>
			<fieldset>
				<legend>
					<?php echo __('Edit Evento'); ?>
				</legend>
				<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name',array('class'=>'form-control'));
				echo $this->Form->file('image',array('required'));
				echo $this->Form->input('text',array('class'=>'form-control','id'=>'summernote'));
			?>
			</fieldset>
			<button type="submit" class="btn btn-warning btn-block my-3" >Modificar</button>
		</div>

	</div>
</div>


