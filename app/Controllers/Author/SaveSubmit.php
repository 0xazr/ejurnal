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
    if ($id == 0) $page = 1;
    
    if($page==1) {
      $data['submission_progress'] = $page;
      
      $submission = $this->submissionModel->where('submission_id', $id)->first();
      if($submission == NULL) {
        $this->submissionModel->insert($data);
      }
      
      $articleId = $this->submissionModel->getInsertID();
      return redirect()->to('/author/submit/2/'.$articleId);
    } else if($page==2) {
      $data['submission_id'] = $id;
      $data['submission_progress'] = $page;
      
      $submission = $this->submissionModel->where('submission_id', $id)->first();
      if($submission['submission_progress'] == 1) {
        $this->submissionModel->whereIn('submission_id', [$id])->set(['submission_progress' => $page])->update();
      }
    }
  }
}