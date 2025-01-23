<?php

namespace Models;

use PDO;

class Users extends DB
{


    public function checkUsers(string $login, string $password, bool $active){
        $query = "SELECT * FROM users WHERE login =:login AND password =:password AND active = TRUE";
        $stmt= $this->conn->prepare($query);
        $stmt->execute(['login' => $login, 'password' => $password, 'active' => $active]);
        return $stmt->fetch();
    }

}