<?php

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
	 * This action is executed before perform any action in the application
	 *
	 * @param Event $event
	 * @param MvcDispatcher $dispatcher
	 * @param \Exception $exception
	 * @return boolean
	 */
	public function beforeException(Event $event, MvcDispatcher $dispatcher, \Exception $exception)
	{
<<<<<<< HEAD
		error_log($exception->getMessage() . PHP_EOL . $exception->getTraceAsString());die;
		var_dump($exception->getMessage());die;
		var_dump(error_log($exception->getMessage() . PHP_EOL . $exception->getTraceAsString()));die;
=======
		error_log($exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
		var_dump($exception->getMessage());
		var_dump(error_log($exception->getMessage() . PHP_EOL . $exception->getTraceAsString()));
>>>>>>> 1e572eb5ed5980298a131e69c7da9a677df3a9c8
		if ($exception instanceof DispatcherException) {
			switch ($exception->getCode()) {
				case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
				case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
					$dispatcher->forward(
						[
							'controller' => 'errors',
							'action'     => 'show404'
						]
					);
					return false;
			}
		}

		$dispatcher->forward(
			[
				'controller' => 'errors',
				'action'     => 'show500'
			]
		);

		return false;
	}
}
