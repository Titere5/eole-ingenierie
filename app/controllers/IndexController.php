<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Welcome');
        parent::initialize();
    }

    /**
    * Shows the 5 last article
    */
    public function indexAction()
    {

        $this->assets->addCss("css/global.css");


    }

}
