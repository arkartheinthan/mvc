<?php

    class Pages extends Controller
    {
        public function __construct() {
            // echo "Pages Loaded...";
        }

        public function index()
        {
            $this->view("Home");
        }

        public function about()
        {
            $this->view('About');
        }

        public function show()
        {
            $data = [
                "title" => "iPhone 7",
                "category" => "iPhone",
                "price" => "500000"
            ];
            $this->view("Show",$data);
        }
    }