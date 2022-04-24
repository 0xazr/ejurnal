<?php
namespace app\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    
    function login($username, $password)
    {
        $sql = "SELECT * FROM `user` WHERE username = '" . $username . "' AND password = MD5('" . $password . "')";
        $query = $this->db->query($sql);

        if ($query->getNumRows()>0)
        {
            return $query->getResultArray();
        }

         else
        {
            return false;
        }
    }
    // $sql = "SELECT * FROM user WHERE username = '" . $username . "' AND password = MD5('" . $password . "')";
    // $query = $this->db->query($sql);
}

?>