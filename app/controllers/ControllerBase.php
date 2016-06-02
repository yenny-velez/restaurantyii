<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
class ControllerBase extends Controller
{
	public function initialize() {
        $this->tag->prependTitle('');
    }

}
