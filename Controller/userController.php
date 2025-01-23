<?php

namespace Controller;


use Models\Users;


class userController
{
    private  $user;



    public function login(string $login, string $password, bool $active) {
        $this->user= new Users();
        $user = new Users();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $active = $_POST['active'];


            if ($user->checkUsers($login, $password,$active)) {
                $this->user->checkUsers($login, $password, $active);
                echo "malumot topildi";
            }else{
                echo "malumot topilmadi";



            }

        }
    }

}