<?php
    class homeController extends controller {
        
        private $user;
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index() {
            $dados = array();
            
            $products = new products();
            
            $dados['list'] = $products->getList();
            
            $this->loadTemplate('home', $dados);
        }
    }