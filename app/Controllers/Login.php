<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      echo "Halaman login";
    }

    public function signIn()
    {
      echo "Memproses user login";
    }

    public function signOut()
    {
      echo "Memproses user logout";
    }
}
