<?php
    class Controller extends Application{
        protected $controller,$_action;
        public $view;

        public function __construct($controller,$action){
            parent:: __construct();
            $this->_controller=$controller;
            $this->_action=$action;
            Sthis->view = new View();
        }
    }