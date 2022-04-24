<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Home'
    //     ];
    //     echo view('pages/home', $data);
    // }

    public function index() //kalo di wamp, cara panggilnya itu: localhost/ejurnal3/public/index.php/[nama_controller]
    {
        $session = session();
        if ($session->get('login_session'))
        {
            $data['theuser'] =$session->get('login_session');
            echo view('template/header', $data);
        }

        else
        {
            $data['theuser'] = false;
            echo view('template/header', $data);
        }
        
        echo view("template/body");
        echo view("template/footer");
    }
}
