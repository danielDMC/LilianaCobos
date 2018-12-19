


<!-- Codigo nuevo -->
<div class=" container-fluid  noticias index">
	<div class="row justify-content-center my-5">
		<div class="col-10 text-center">
			<h2>
				<?php echo __('Noticias'); ?>
			</h2>
			<?php echo $this->Html->link(__('Añadir Noticia'), array('action' => 'add'),array('class'=>'btn btn-primary mt-2')); ?>
		</div>
	</div>
</div>

<div class=" container-fluid ">
	  <div class="row justify-content-center">
    <div class="col-md-10 ">
     <table class="table table-bordered shadow ">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Imagen</th>
      <th scope="col">Texto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
	<?php foreach ($noticias as $noticia): ?>
  <tbody class="">
    <tr class="align-items-center">
      <th><h4><?php  echo($noticia['Noticia']['name']); ?></h4></th>
      <td> <?php echo $this->Html->image('/img/noticias/'.$noticia['Noticia']['image'],array('style'=>'width:200px')); ?> </td>
	  <td class="text-justify"><div class="px-2" style="height:200px;overflow-y: scroll;"><?php echo ($noticia['Noticia']['text']); ?></div></td>
	  
      <td class="text-center"> 
		  <?php echo $this->Html->link(__('View'), array('action' => 'view', $noticia['Noticia']['id']),array('class'=>'btn btn-success my-1')); ?>
		  <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $noticia['Noticia']['id']),array('class'=>'btn btn-warning  my-1')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noticia['Noticia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $noticia['Noticia']['id']),'class'=>'btn btn-danger my-1')); ?>
	  </td>
    </tr>
  </tbody>
<?php endforeach; ?>
</table>
    </div>
  </div>
</div>