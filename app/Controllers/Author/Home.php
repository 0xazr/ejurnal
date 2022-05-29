<?php

namespace App\Controllers\author;

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
    $data["nama_depan"] = $this->model_custom->get_where('author', $this->session->get('surel'), '_email')[0]->first_name;
    $data["nama_tengah"] = $this->model_custom->get_where('author', $this->session->get('surel'), '_email')[0]->middle_name;
    $data["nama_belakang"] = $this->model_custom->get_where('author', $this->session->get('surel'), '_email')[0]->last_name;
    echo "Hello Author!";
    return view('author/home', $data);
  }
}
