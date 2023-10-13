<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    return view('welcome_message');
  }

  public function pertemuan(): void
  {
    $title = "pertemuan 3";
    echo "welcome pertemuan";
  }
}
