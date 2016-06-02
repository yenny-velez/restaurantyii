<?php
use Phalcon\Mvc\Dispatcher;
class PrensaController extends ControllerBase
{

    public function initialize() {
       $this->tag->setTitle('Prensa');
       
       parent::initialize();
    }

    public function prensaAction()
    {
    	/*$dispatcher = new Dispatcher();
        $dispatcher->forward(array(
						'controller' => 'prensa',
						'action' => 'prensa',
						'params' =>'prensaSEO'
					));*/
    }

}

