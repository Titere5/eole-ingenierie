<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    protected function initialize()
    {
        $this->tag->prependTitle('Eole ingenierie | ');
        $this->view->setTemplateAfter('main');
    }
}
