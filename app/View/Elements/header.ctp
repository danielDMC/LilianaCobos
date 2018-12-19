
<div class="container-fluid mt-4">
        
        <div class="row justify-content-center ">
            <div class="col-4 text-left social-icons">
                <a href="#"><i class="fab fa-facebook-f mr-1"></i></a></a>
                <a href="#"><i class="fab fa-youtube mr-1"></i></a>
                <a href="#"><i class="fab fa-instagram "></i></a>
            
            </div>
           
            <div class="col-4 text-center">
            
            <?php echo $this->Html->image('/img/fotos/disco.png',array('width'=>'230px','class'=>'logo img-fluid')); ?>
            </div>
            <div class="col-4 ">
                
            </div>

           
            <!-- <div class="social-icons col-md-4 text-center my-3">
                <img  class="img-fluid" src="assets/img/disco.png" alt="" width="200px">
            </div> -->
       
        </div>

    </div>

            <nav class=" mt-4 navbar navbar-expand-md navbar-light bg-light ">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse  " id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <?php echo $this->Html->link('Inicio',array('controller'=>'Principals','action'=>'index'),array('class'=>'nav-link button') );?>
                            

                        </li>
                        <li class="nav-item ">
                             <?php echo $this->Html->link('Noticias',array('controller'=>'Principals','action'=>'noticias'),array('class'=>'nav-link button') );?>
                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('Eventos',array('controller'=>'Principals','action'=>'eventos'),array('class'=>'nav-link button') );?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bienvenidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="#" class="btn btn-dark mx-2 ">En</a>
                        <a href="#" class="btn btn-dark mx-2 ">Es</a>
                        <a href="#" class="btn btn-dark mx-2 ">Ger</a>
                    </form>
                </div>
            </nav>