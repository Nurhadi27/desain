<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Anak extends BaseController
{
    public function index()
    {
        $data = ['title' => 'anak'];
        return view('anak', $data);
    }
}
