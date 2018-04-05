<?php
class Page extends Controller
{
    public function index()
    {
        $this->views('index',[]);
    }

    public function login()
    {
        $this->views('login',[]);
    }
}