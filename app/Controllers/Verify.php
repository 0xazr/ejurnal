<?php

namespace App\Controllers;

use App\Controllers;
//use App\Controllers\email_controller;
use App\Models\Model_Account;
use Config\Services;

class Verify extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->model_account = new Model_Account();
        //$this->email_controller = new email_controller();
    }
    

    public function verify_login()
    {   
        $security = \Config\Services::security();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // Cek akun di panitia lalu di account
        if ($query = $this->model_account->getAccount($username, $password)) {
            // User adalah account (peserta)
            $ses_data = [
                //'is_admin' => false,
                'username' => $query[$this->model_account->account_username],
                'role' => $query[$this->model_account->account_table],
                'surel' => $query[$this->model_account->account_surel]
            ];
            $this->session->set($ses_data);
            // Redirect sesuai account_table di account
            switch ($query[$this->model_account->account_table]) {
                case 'author':
                    return redirect()->to('/author/home/index');
                    break;
                case 'editor':
                    return redirect()->to('/editor/home/index');
                    break;
                case 'reviewer':
                    return redirect()->to('/reviewer/home/index');
                    break;
                default:
                    session()->setFlashdata('msg', 'username atau password salah!');
                    return redirect()->to('/Auth/login')->withInput();
                    break;
            }
        } else {
            session()->setFlashdata('msg', 'Username atau password salah!');
            return redirect()->to('/Auth/login')->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/index.php/home'));
    }
}
