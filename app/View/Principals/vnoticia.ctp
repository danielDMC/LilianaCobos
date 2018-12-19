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