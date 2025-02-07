<?php

namespace Models;

class Admin extends DB

{
    public function checkAdmin(string $login, string $password, bool $active){
        $query = "SELECT * FROM admins WHERE login =:login AND password =:password AND active = TRUE";
        $stmt= $this->conn->prepare($query);
        $stmt->execute(['login' => $login, 'password' => $password, 'active' => $active]);
        return $stmt->fetch();
    }

}