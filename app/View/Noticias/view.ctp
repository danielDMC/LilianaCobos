<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noticia'), array('action' => 'edit', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $noticia['Noticia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Noticias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<!-- Contenido -->
<div class="container-fluid mb-4 ">
   <div class="row justify-content-center align-items-center ">
  
      <div class=" col-md-10  my-4">
         <div class="card bg-light text-center " style="border-radius:12px;" >
			<div class="container my-4 "><?php echo $this->Html->image('/img/noticias/'.$noticia['Noticia']['image'],array('style'=>'width:250px; border-radius:18px;')); ?>
			
	</div>
           
            <div class="card-body">
               <h5 class="card-title px-2"><?php echo ($noticia['Noticia']['name']); ?></h5>
              
            </div>
            <div class="card-body text-justify">
            <p class="card-text px-4 mb-4" id="texto-noticia">
                <?php echo ($noticia['Noticia']['text']); ?>
            </p>
            </div>
         </div>
      </div>

   </div>
</div>
<!-- Contenido -->