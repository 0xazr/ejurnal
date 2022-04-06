<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;

class Home extends BaseController
{
  public function index()
  {
    $data = [
      'title' => "Index",
      'contentTitle' => ""
    ];
    echo view('pages/author/home', $data);
  }

  public function submit($page = 1, $id = 0)
  {
    $data['title'] = "Submission";

    switch($page) {
      case 1:
        $data = [
          'title' => "Step 1. Starting the Submission",
          'headerTitle' => "Step 1. Starting the Submission"
        ];
        break;
      case 2:
        $data = [
          'title' => "Step 2. Uploading the Submission",
          'headerTitle' => "Step 2. Uploading the Submission"
        ];
        break;
      case 3:
        $data = [
          'title' => "Step 3. Entering the Submission's Metadata",
          'headerTitle' => "Step 3. Entering the Submission's Metadata"
        ];
        break;
      case 4:
        $data = [
          'title' => "Step 4. Uploading Supplementary Files",
          'headerTitle' => "Step 4. Uploading Supplementary Files"
        ];
        break;
      case 5:
        $data = [
          'title' => "Step 5. Confirming the Submission",
          'headerTitle' => "Step 5. Confirming the Submission"
        ];
        break;
    }
    
    echo view("pages/author/submit/$page", $data);
  }

  public function saveSubmit()
  {
    //do submit
  }
}
