<?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?>

<div class="container ">
 <div class="row justify-content-center">
		<div class="eventos form">
			<?php echo $this->Form->create('Evento',array('type'=>'file')); ?>
			<fieldset>
				<legend>
					<?php echo __('Añadir Evento'); ?>
				</legend>
				<?php
					echo $this->Form->input('name',array('class'=>'form-control'));
					echo $this->Form->file('image',array('class'=>'form-control','required'));
					echo $this->Form->input('text',array('class'=>'form-control','id'=>'summernote'));
				?>
			</fieldset>
			<button type="submit" class="btn btn-block btn-success my-3">guardar</button>
		
		</div>
 </div>
</div>


