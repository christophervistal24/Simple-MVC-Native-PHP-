<?php
class Controller
{
    //this is for database calling the User script file
        public function model($model)
        {

            $file = '../app/model/' . $model . '.php';
            if(file_exists($file)){
                require_once $file;
                return new $model;
            }else{
                exit();
            }
        }

        //calling the page
        public function views($view,$data = [])
        {
            $file = '../app/views/' . $view . '.php';
            (file_exists($file)) ? require_once $file : '';
        }



}