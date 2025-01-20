<?php

namespace Controller;

use Models\Product;

require_once __DIR__ . '/../Models/Product.php';

class storeController {
    private $product;

    public function __construct() {
        $this->product = new Product();
    }

    public function saveProduct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];

            if ($name && $description && $price && $stock) {
                $this->product->store($name, $description, $price, $stock);
                echo "<div style='padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
            Mahsulot muvaffaqiyatli saqlandi!
          </div>";
            } else {
                echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
            Barcha maydonlarni to‘ldiring!
          </div>";
            }

        }
    }
}
