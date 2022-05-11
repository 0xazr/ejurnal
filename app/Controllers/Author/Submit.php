<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;
use App\Models\SubmissionModel;

class Submit extends BaseController
{
  protected $submissionModel;

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
  }

  public function index($page = 1, $id = null)
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

    if($page != 1 && $this->submissionModel->where('submission_id', $id)->first() == NULL) {
      return redirect()->to('/author/submit/1');
    }

    return view("pages/author/submit/$page", $data);
  }
}