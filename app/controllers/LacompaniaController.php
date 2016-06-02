<?php

class LacompaniaController extends ControllerBase
{

	public function initialize() {
       $this->tag->setTitle('Nosotros');
       parent::initialize();
    }

    public function urbanosAction()
    {
    	$this->tag->setTitle('Urbanos');
        parent::initialize();
    }

    public function mensajeros_urbanosAction()
    {
    	$this->tag->setTitle('Mensajeros Urbanos');
        parent::initialize();
    }
    public function domicilios_urbanosAction()
    {
    	$this->tag->setTitle('Domicilios Urbanos');
        parent::initialize();
    }

    public function envios_urbanosAction()
    {
    	$this->tag->setTitle('Envíos Urbanos');
        parent::initialize();
    }

    public function api_urbanosAction()
    {
    	$this->tag->setTitle('API');
        parent::initialize();
    }
}

