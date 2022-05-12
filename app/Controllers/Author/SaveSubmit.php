<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;
use App\Models\SubmissionModel;

class SaveSubmit extends BaseController
{
  protected $submissionModel;
  protected $helpers = ['form'];

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
  }

  public function index($page = 1, $id = 0)
  {
    switch($page) {
      case 1:
        $data['submission_progress'] = $page;
        
        $submission = $this->submissionModel->where('submission_id', $id)->first();
        
        if($submission == NULL) {
          // return 'HALOCOY';
          $this->submissionModel->insert($data);
          $submission_id = $this->submissionModel->getInsertID();
        } else {
          $submission_id = $id;
        }
        
        return redirect()->to('/author/submit/2/'.$submission_id); 
        break;
      case 2:
        $file = $this->request->getFile('submissionFile');
        $file_name = $file->getSizeByUnit('kb');
        echo $file_name . '<br>';
        var_dump($file);
        break;
      case 3:
        break;
      case 4:
        break;
      case 5:
        break;
    }
  }
}