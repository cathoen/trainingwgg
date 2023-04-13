<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Masuk extends BaseController
{
    public function index()
    {
        return view('kelas/login.php');
    }
}
