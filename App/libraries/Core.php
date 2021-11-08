<?php

    // Controller , Method , Params
    
    class Core{
        protected $currentController = "Pages";
        protected $currentMethod = "index";
        protected $currentParams = [];

        public function __construct() {
            print_r($this->getUrl());
        }

        public function getUrl()
        {
            $url =  $_GET['url'];
            $url = rtrim($url,'/');                         //rtrim = right space remove
            $url = filter_var($url,FILTER_SANITIZE_URL);    //filter string or number
            $url = explode("/",$url);                       //Break string into Array
            return $url;
        }
    }