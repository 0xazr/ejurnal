<?php

namespace App\Controllers;

use App\Controllers;

class Auth extends BaseController
{
  public function login()
  {
    $security = \Config\Services::security();
    session();
    $data = [
      'validation' => \Config\Services::validation(),
    ];
    return view('auth/login');
  }
}
