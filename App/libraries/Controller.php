<?php

    class Controller
    {
        public function model($model)
        {
            if(file_exists("../App/models/" . $model . ".php"))
            {
                require "../App/models/" . $model . ".php";
                return new $model;
            }
        }

        public function view($view, $data = [])
        {
            if(file_exists('../App/views/' . $view . ".php"))
            {
                require '../App/views/' . $view . ".php";
            }
        }
    }