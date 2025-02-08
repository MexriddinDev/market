<?php

namespace Controller;
use Models\Users;
class userController
{
    private  $user;



    public function login()
    {

        $this->user= new Users();
        $user = new Users();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $active = TRUE;


            if ($user->checkUsers($login, $password,$active)) {
                $this->user->checkUsers($login, $password, $active);
                header('Location: /dashboard');
//                echo "malumot topildi";
            }else{
//                echo "malumot topilmadi";

                header('Location: /login');



            }

        }
    }

}