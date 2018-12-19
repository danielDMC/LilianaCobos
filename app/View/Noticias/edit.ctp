



<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Noticia.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?></li>

<div class="container my-4">
	<div class="row justify-content-center">
		<div class="noticias form">
			<?php echo $this->Form->create('Noticia',array('type'=>'file')); ?>
			<fieldset>
				<legend>
					<?php echo __('Edit Noticia'); ?>
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
