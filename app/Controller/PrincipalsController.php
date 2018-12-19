<?php
App::uses('AppController', 'Controller');
App::uses('Images','Lib/Images');
// App::uses('MyModel', 'Model');

class PrincipalsController extends AppController {
var $uses=array('Noticia','Evento');
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->layout="principal";
   

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function Noticias() {
            $this->layout="principal";
             $test=$this->Noticia->find('all');
        // print_r($test);
        $this->set('noticias', $test);
        

    }
    	public function vnoticia($id = null) {
               $this->layout="principal";
            
     		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
		$this->set('noticia', $this->Noticia->find('first', $options));
    }
    
    public function Eventos() {
           $this->layout="principal";
             $test=$this->Evento->find('all');
        // print_r($test);
        $this->set('eventos', $test);
        

    }
    public function vevento($id = null) {
           $this->layout="principal";
            
     		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));
    }
	



}
