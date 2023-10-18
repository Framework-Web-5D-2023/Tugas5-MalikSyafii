<?php

namespace App\Controllers;

class Login extends BaseController
{
  public function index(): string
  {

    $data = [
      "title" => "Login Sini",
      "nama" => "Framework Web",
      "kelas" => "5D"
    ];

    return view('login', $data);
  }

  public function signin(): string
  {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // if($email && $password){
    //   return view('home', $data);
    // } else {
    //   return view('login', $data);
    // }

    $data = [
      "title" => "Login Sini",
      "nama" => "Framework Web",
      "kelas" => "5D"
    ];

    return view('home', $data);
  }
}
