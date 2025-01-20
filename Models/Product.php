<?php

namespace Models;

require_once 'Models/DB.php';

class Product extends DB
{
    public function store(string $name, string $description, int $price, int $stock)
    {
        $query = "INSERT INTO products (name, description, price, stock)
                    VALUES (:name, :description, :price, :stock)";

        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
        ]);
    }

}
