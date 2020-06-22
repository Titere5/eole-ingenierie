<?php

// use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Flash;
use Phalcon\Forms\Element\File;
use Phalcon\Paginator\Adapter\Model as Paginator;



class TeamController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Bienvenue');
        parent::initialize();
    }


    public function indexAction() {
    }


}
