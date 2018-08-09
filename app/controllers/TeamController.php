<?php

use Sauvegarde\Models\Articles;
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

        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "articles", $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();
        }

        $parameters = [];
        if ($this->persistent->searchParams) {
            $parameters = $this->persistent->searchParams;
        }

        $articles = Articles::find(
            [
                "order" => "id DESC",
                "limit" => 5,
            ]
        );
        if (count($articles) == 0) {
            $this->flash->notice("The search did not find any articles");

            return $this->dispatcher->forward(
                [
                    "controller" => "articles",
                    "action"     => "index",
                ]
            );
        }

        $this->view->articles = $articles;

    }

}
