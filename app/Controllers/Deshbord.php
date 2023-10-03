<?php

namespace App\Controllers;

class Deshbord extends BaseController
{
    public function deshbord()
    {
        return view('deshbord');
    }
    public function all_Customers()
    {
        return view('all_Customers');
    }
    public function add_Customers()
    {
        return view('add_Customers');
    }
    public function all_Products()
    {
        return view('all_Products');
    }
    public function add_Product()
    {
        return view('add_Product');
    }
    public function login()
    {
        return view('login');
    }
    public function creat_order()
    {
        return view('creat_order');
    }
 
 
}
