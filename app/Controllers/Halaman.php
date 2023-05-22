<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Halaman extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PrakWeb',
            'titleHeader' => 'Halaman Beranda'
        ];

        $mahasiswa = new MahasiswaModel();
        // [$nama, $nim, $prodi, $hobi, $skill, $title] = $mahasiswa->getInfo();

        echo view('layout/header', $data);
        echo view('halaman/beranda', [
            'nama' => $mahasiswa->getNama(),
            'nim' => $mahasiswa->getNim(),
            'prodi' => $mahasiswa->getProdi(),
            'hobi' => $mahasiswa->getHobi(),
            'skill' => $mahasiswa->getSkill(),
        ]);
        echo view('layout/footer');
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
            'titleHeader' => 'Halaman Profil'
        ];

        $mahasiswa = new MahasiswaModel();

        echo view('layout/header', $data);
        echo view('halaman/profil', [
            'nama' => $mahasiswa->getNama(),
            'nim' => $mahasiswa->getNim(),
            'prodi' => $mahasiswa->getProdi(),
            'hobi' => $mahasiswa->getHobi(),
            'skill' => $mahasiswa->getSkill(),
        ]);
        echo view('layout/footer');
    }

}