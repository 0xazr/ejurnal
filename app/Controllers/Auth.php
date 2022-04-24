<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('login_session')) 
        {
            return redirect()->to(base_url() . '/index.php/home');
        }

        else
        {
            $data['theuser'] = false;
            echo view('template/header', $data);
        }
        
        echo view('template/header');
        echo view('auth/login');
        echo view('template/footer');
    }

    public function login()
    {
        helper(['form']);
        
        $session = session();
        
        $model = new AuthModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->login($username, $password);

        if($data)
        {
            echo "Login Berhasil";
            $ses_data = array
            (
                'id_user' => $data[0]['id_user'],
                'username' => $data[0]['username'],
                'nama' => $data[0]['nama'],
            );
            $session->set('login_session', $ses_data);
            return redirect()->to(base_url('/index.php/home'));
        }

        else
        {
            echo "Login Gagal";
            return redirect()->to(base_url('/index.php/auth'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/index.php/auth'));
    }
}
