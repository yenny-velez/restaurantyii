<?php

class ErrorController extends ControllerBase
{

    public function initialize() {
       $this->tag->setTitle('M URBANOS');
       parent::initialize();
    }

    public function error_404Action()
    {
    	$this->response->setStatusCode(404, 'Not Found');
    	$this->response->setHeader('HTTP/1.0 404','Not Found');
        $this->view->pick('error/error_404');
        
    }

}

