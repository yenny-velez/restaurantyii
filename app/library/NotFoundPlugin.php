<?php

//namespace Murbanos;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Dispatcher;
use Phalcon\Mvc\Dispatcher\Exception as DispatcherException;
use Phalcon\Mvc\Dispatcher as MvcDispatcher;

/**
 * NotFoundPlugin
 *
 * Handles not-found controller/actions
 */
class NotFoundPlugin extends Plugin
{

	/**
	 * This action is executed before execute any action in the application
	 *
	 * @param Event $event
	 * @param MvcDispatcher $dispatcher
	 * @param Exception $exception
	 * @return boolean
	 */
	public function beforeException(Event $event, MvcDispatcher $dispatcher, Exception $exception)
	{
		if ($exception instanceof DispatchException) {
			switch ($exception->getCode()) {
				case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
				case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:

				
					$dispatcher->forward(array(
						'controller' => 'error',
						'action' => 'error_404'
					));
					return false;
			}
		}
		$dispatcher->forward(array(
            'controller' => 'error',
            'action'     => 'error_404'
        ));

        return false;
	}

}
