<?php

    // Controller , Method , Params
    
    class Core{
        protected $currentController = "Pages";
        protected $currentMethod = "index";
        protected $currentParams = [];

        public function __construct() {
            $url = $this->getUrl();
            
            // Contorller Check
            if(file_exists("../App/controllers/" . ucwords($url[0]) . '.php'))
            {
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
            require "../App/controllers/". $this->currentController . ".php";
            $this->currentController = new $this->currentController;

            
            // Method Check
            if(isset($url[1]))
            {
                if(method_exists($this->currentController, $url[1]))
                {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
            

            //Get Parameter
            $this->currentParams = $url ? array_values($url) : [];
            call_user_func_array([$this->currentController,$this->currentMethod],$this->currentParams);

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