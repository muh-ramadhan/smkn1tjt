<?php

namespace App\Controllers;

class Home extends BaseController
{   
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('welcome_message', $data);
    }
}
