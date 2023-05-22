<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        return view('beranda', [
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim()
        ]);
    }

    public function coba()
    {
        $data = new MahasiswaModel();

        [$nama, $nim] = $data->getInfo();

        echo $nama;
        echo $nim;
    }
}