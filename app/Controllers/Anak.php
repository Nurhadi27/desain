<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;
use App\Models\AnakModel;
use CodeIgniter\HTTP\ResponseInterface;

class Anak extends BaseController
{
    protected $anakModel;
    public function __construct()
    {
        $this->anakModel = new AnakModel();
    }
    public function index()
    {
        $anak = $this->anakModel->getAnak(); // Mengambil data users dengan umur
        $array = json_decode(json_encode($anak), true); //ubah kelas std jadi array
        foreach ($array as &$row) {
            $row['tgl_lahir'] = Time::parse($row['tgl_lahir'])->toLocalizedString('d MMMM yyyy'); // Format: 25 November 2024
        }

        $data = [
            'title' => 'anak',
            'anak' => $array
        ];
        return view('anak', $data);
    }
}
