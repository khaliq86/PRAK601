<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "Muhammad Khaliq Teuku Ansari";
    protected $nim = "2110817310008";
    protected $prodi = "Teknologi Informasi";
    protected $hobi = "Main Voli";
    protected $skill = "Baru Belajar Desain Web";
    protected $title = "Halaman Profil";

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function getHobi()
    {
        return $this->hobi;
    }

    public function getSkill()
    {
        return $this->skill;
    }
}