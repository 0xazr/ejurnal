<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;
use App\Models\SubmissionModel;
use App\Models\SubmissionFileModel;

class SaveSubmit extends BaseController
{
  protected $submissionModel;
  protected $submissionFileModel;
  protected $helpers = ['form'];

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
    $this->submissionFileModel = new SubmissionFileModel();
  }

  public function index($page = 1, $id = 0)
  {
    switch($page) {
      case 1:
        $data['submission_progress'] = $page;
        
        $submission = $this->submissionModel->where('submission_id', $id)->first();
        
        if($submission == NULL) {
          $this->submissionModel->insert($data);
          $submission_id = $this->submissionModel->getInsertID();
        } else {
          $submission_id = $id;
        }
        
        return redirect()->to('/author/submit/2/'.$submission_id); 
        break;
      case 2:
        $validationRule = [
          'submissionFile' => [
              'label' => 'Submission File',
              'rules' => 'uploaded[submissionFile]'
                  . '|mime_in[submissionFile,application/pdf]'
          ],
        ];

        if (! $this->validate($validationRule)) {
          return redirect()->to('/author/submit/2/'.$id.'?error=pdf+only');
        }

        $file = $this->request->getFile('submissionFile');

        if($file != NULL) {
          // Buat submission_id baru
          $data['submission_id'] = $id;
          
          $this->submissionFileModel->insert($data);
          // die('stop');
          $submission_file_id = $this->submissionFileModel->getInsertID();
          $count = count($this->submissionFileModel->where('submission_id', $id)->find());

          // Update fileinfo menggunakan submission id
          $data = [
            'submission_file_name' => $id . '-' . $submission_file_id . '-' . $count . '-SM.pdf',
            'submission_original_file_name' => $file->getClientName(),
            'submission_file_size' => $file->getSizeByUnit('kb'),
            'submission_file_address' => 'uploads/author/' . $id . '/' . $submission_file_id . '/' . $id . '-' . $submission_file_id . '-' . $count . '-SM.pdf'
          ];

          $result = $this->submissionFileModel->update($submission_file_id, $data);
          
          if($result) {
            $file->store('author/' . $id . '/' . $submission_file_id, $data['submission_file_name']);
          }

          return redirect()->to('/author/submit/2/'.$id);
        }
        break;
      case 3:
        break;
      case 4:
        break;
      case 5:
        break;
    }

    if($page != 1 && $this->submissionModel->where('submission_id', $id)->first() == NULL) {
      return redirect()->to('/author/submit/1');
    }
  }
}