<?php

use Phalcon\Mvc\User\Component;

/**
* Elements
*
* Helps to build UI elements for the application
*/
class Elements extends Component
{
    private $_headerMenu = [
        'navbar-left' => [
            'index' => [
                'caption' => 'Accueil',
                'action' => ''
            ],
            'team' => [
                'caption' => 'La team',
                'action' => 'index'
            ],
            'means' => [
                'caption' => 'Nos moyens',
                'action' => 'index',
            ],
            'references' => [
                'caption' => 'Nos références',
                'action' => 'index',
            ],
            'qualification' => [
                'caption' => 'L\'ingénierie qualifiée',
                'action' => 'index',
            ],
            'projects' => [
                'caption' => 'Projet en cours',
                'action' => 'index'
            ],
            'partners' => [
                'caption' => 'Nos partenaires',
                'action' => 'index'
            ],
            'contact' => [
                'caption' => 'Nous contacter',
                'action' => 'index'
            ],
        ],
    ];

    // private $_tabs = [
    //     'Produits' => [
    //         'controller' => 'products',
    //         'action' => 'index',
    //         'any' => true
    //     ],
    //     'Caractéristiques' => [
    //         'controller' => 'caracteristiques',
    //         'action' => 'index',
    //         'any' => true
    //     ],
    //     'Utilisateurs' => [
    //         'controller' => 'users',
    //         'action' => 'index',
    //         'any' => true
    //     ],
    // ];


    /**
    * Builds header menu with left and right items
    *
    * @return string
    */
    public function getMenu()
    {

        $auth = $this->session->get('auth');
        if ($auth) {
            $this->_headerMenu['navbar-right']['session'] = [
                'caption' => 'Se déconnecter',
                'action' => 'end'
            ];

        } else {
            unset($this->_headerMenu['navbar-right']['profile']);
            unset($this->_headerMenu['navbar-right']['admin']);
            unset($this->_headerMenu['navbar-left']['pages']);
        }

        $controllerName = $this->view->getControllerName();
        foreach ($this->_headerMenu as $position => $menu) {
            // echo '<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">';
            echo '<ul class="navbar-nav pull-right', $position, '">';
            foreach ($menu as $controller => $option) {
                if ($controllerName == $controller) {
                    echo '<li class="nav-item colorlib-active onglet">';
                } else {
                    echo '<li class="nav-item onglet">';
                }
                    if($controller === 'index'){
                        echo $this->tag->linkTo([$option['action'], $option['caption'], "class" => "nav-link"]);
                    }else {
                        echo $this->tag->linkTo([$controller . '/' . $option['action'], $option['caption'], "class" => "nav-link"]);

                    }



                echo '</li>';
            }

            echo '</ul>';
        }
    }


}
