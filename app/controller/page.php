<?php
class Page extends Controller
{
    public function index()
    {
        $data['title'] = 'Simple MVC | Home';
        $this->views('includes/header',$data);
        $this->views('index',[]);
        $this->views('includes/footer',[]);
    }

    public function login()
    {
       $data['title'] = 'Simple MVC | Login';
       $this->views('includes/header',$data);
       $this->views('login',[]);
       $this->views('includes/footer',[]);
    }
}