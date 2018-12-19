
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento'), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $evento['Evento']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<!-- Contenido -->
<div class="container-fluid mb-4 ">
   <div class="row justify-content-center align-items-center ">
  
      <div class=" col-md-10  my-4">
         <div class="card bg-light text-center " style="border-radius:12px;" >
			<div class="container my-4 "><?php echo $this->Html->image('/img/eventos/'.$evento['Evento']['image'],array('style'=>'width:250px; border-radius:18px;')); ?>
			
	</div>
           
            <div class="card-body">
               <h5 class="card-title px-2"><?php echo __('Name'); ?></h5>
              
            </div>
            <div class="card-body text-justify">
            <p class="card-text px-4 mb-4" id="texto-noticia">
                <?php echo ($evento['Evento']['text']); ?>
            </p>
            </div>
         </div>
      </div>

   </div>
</div>
<!-- Contenido -->