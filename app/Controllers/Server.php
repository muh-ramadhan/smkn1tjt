<?php

namespace App\Controllers;

class Server extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('v_server_status', $data);
    }
}
