
<!-- Contenido -->
<div class="container-fluid mb-4 ">
   <div class="row justify-content-center align-items-center ">
      <?php foreach ($noticias as $noticia): ?>
      <div class=" col-lg-4 col-md-6  my-4">
         <div class="card bg-light" style="border-radius:12px;" >
            <div class="img-noticia" style="background-image:url(/lilianacobos-cake/img/noticias/<?php echo $noticia['Noticia']['image'];?>"></div>
             
            <div class="card-body">
               <h5 class="card-title px-2"><?php  echo($noticia['Noticia']['name']); ?></h5>
               <div class="text-justify" style="height:300px;overflow-y: scroll;">
                  <p class="card-text px-2" id="texto-noticia" ><?php echo ($noticia['Noticia']['text']); ?> </p>
               </div>
            </div>
            <div class="card-body">
               <div class="text-center">
                <?php echo $this->Html->link(__('Ver Noticia'), array('action' => 'vnoticia', $noticia['Noticia']['id']),array('class'=>'btn btn-dark my-1')); ?>
                </div>
            </div>
         </div>
      </div>
     <?php endforeach; ?>
   </div>
</div>
<!-- Contenido -->