<?php

namespace App\Controllers\reviewer;

use App\Controllers\BaseController;
use App\Models\Model_custom;
use App\Models\Model_Account;

class Home extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }

  public function index()
  {
    $data["nama"] = $this->model_custom->get_where('reviewer', $this->session->get('surel'), '_email')[0]->nama;
    echo "Hello Reviewer!";
    return view('reviewer/home', $data);
  }
}
