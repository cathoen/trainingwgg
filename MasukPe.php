<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MasukPe extends BaseController
{
    public function index()
    {
        return view('kelas/home.php');
    }
}
