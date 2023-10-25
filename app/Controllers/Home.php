<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    // dd($this->mahasiswaModel->getAllMahasiswa());
    $mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
    $data = [
      "title" => "Home",
      "nama" => "Alfian Vito",
      "biodata" => [
        [
          "name" => "Irfan",
          "npm" => "20202222"
        ],
        [
          "name" => "Toni",
          "npm" => "20213102222"
        ],
      ],
      "mahasiswa" => $mahasiswa,
    ];
    return view('home/index', $data);
  }
}
