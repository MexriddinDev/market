<?php

namespace Models;

use PDO;

require_once 'Models/DB.php';

class Product extends DB
{
    public function store(string $name, string $description, float $price, int $stock)
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
        
        if ($stmt->rowCount() === 0) {
            throw new \RuntimeException('Failed to save product');
        }
        
        return true;
    }

    public function getAllProducts()
    {
        try {
            $query = "SELECT * FROM products";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error fetching products: " . $e->getMessage());
            return false;
        }
    }
    public function deleteProduct(int $id): bool
    {
        $query = "DELETE FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            'id' => $id,

        ]);
        if ($stmt->rowCount() === 0) {
            throw new \RuntimeException('Failed to delete product');

        }
        return true;
    }


}
