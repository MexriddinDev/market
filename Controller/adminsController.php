<?php

namespace Controller;

use Models\Admin;


class adminsController
{
    private  $admin;



    public function login(string $login, string $password, bool $active) {
        $this->admin= new Admin();
        $user = new Admin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $active = $_POST['active'];


            if ($user->checkAdmin($login, $password,$active)) {
                $this->admin->checkAdmin($login, $password, $active);
                echo "malumot topildi";
            }else{
                echo "malumot topilmadi";



            }

        }
    }

}