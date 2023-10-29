<?php

namespace App\Controllers;

use App\Models\NewsAndBlogModel;
use App\Models\KategoriNewsAndBlogModel;
use App\Models\PengaturanWebModel;
use App\Models\MenuDinamisModel;
use App\Models\MenuSubDinamisModel;
use App\Models\MenuSubSubDinamisModel;

class Operator extends BaseController
{

    public function __construct()
    {
        $this->PengaturanWebModel = new PengaturanWebModel();
        helper(['form', 'date', 'inflector', 'text', 'number']);
    }

    public function index():string
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Operator',
        ];
        return view('fv_operator/v_beranda', $data);
    }
}
