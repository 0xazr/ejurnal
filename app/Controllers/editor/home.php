<?php

namespace App\Controllers\editor;

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
    $data["nama"] = $this->model_custom->get_where('editor', $this->session->get('surel'), '_email')[0]->first_name;
    echo "Hello Editor!";
    return view('editor/home', $data);
  }
}
