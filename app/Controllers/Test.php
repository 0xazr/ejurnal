<?php

namespace App\Controllers;

use \Geeklabs\Breadcrumbs\Breadcrumb;

class Test extends BaseController
{
  public $breadcrumb;
  
  public function __construct()
  {
    $this->breadcrumb = new Breadcrumb();
  }

  public function index()
  {
    $this->breadcrumb->add('Home', '/');
    $this->breadcrumb->add('Dashboard', '/dashboard');  
    $this->breadcrumb->add('Customers', '/customers');
    
    $data['breadcrumbs'] = $this->breadcrumb->render();

    return view('test', $data);
  }
}
