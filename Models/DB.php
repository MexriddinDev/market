<?php

namespace Models;

use PDO;

class DB
{
    public $db_name;
    public $db_user;
    public $db_pass;
    public $db_host;

    public $conn;

    public function __construct()
    {
        $this->db_name = 'product';
        $this->db_user = 'root';
        $this->db_pass = '0226';
        $this->db_host = 'localhost';
        try {
            $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (\PDOException $e) {
            // Bu yerda xatolikni loglash yoki ko'rsatish mumkin
            die("Xatolik: " . $e->getMessage()); // bu vaqtinchalik yechim xatolikni ko'rish uchun
        }
    }
}
