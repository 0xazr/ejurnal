<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmissionFileModel extends Model
{
    protected $table = 'submission_file';
    protected $primaryKey = 'submission_file_id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['submission_file_name', 'submission_original_file_name', 'submission_file_size', 'uploaded_at', 'submission_id', 'submission_file_address'];
    protected $createdField  = 'uploaded_at';
    protected $updateField = 'updated_at';
}