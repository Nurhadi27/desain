<?php

namespace App\Models;

use CodeIgniter\Model;

class AnakModel extends Model
{
    protected $table = 'anak';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama_anak', 'tgl_lahir', 'jenis_kelamin', 'nama_ortu', 'nik_ortu', 'hp_ortu', 'rt', 'rw'];

    public function getAnak()
    {
        // Ambil semua data users
        $builder = $this->builder();
        $builder->select('id, nik, nama_anak, tgl_lahir, jenis_kelamin, TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS tahun, TIMESTAMPDIFF(MONTH, tgl_lahir, CURDATE()) AS bulan, nama_ortu, nik_ortu, hp_ortu, rt, rw');
        $query = $builder->get();
        return $query->getResult(); // Mengembalikan hasil query
    }
}
