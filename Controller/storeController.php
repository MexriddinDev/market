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


            if ($name && $description && $price && $stock ) {
                $this->product->store($name, $description, $price, $stock);
                header('Location: /products');
            } else {
                echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
            Barcha maydonlarni to‘ldiring!
          </div>
          <div class='add-another' style='text-align: center; margin-top: 20px;'>
              <button type='button' onclick=\"document.getElementById('productForm').reset(); document.getElementById('name').focus();\" style='padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;'>
                  Yana Mahsulot Qo'shish
              </button>
          </div>";
            }



        }

    }
    public function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $this->product->deleteProduct($id);
            header('Location: /products');
        }
        else {
            echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
            Mahsulotni ochirib bolmadi
          </div>
          <div class='add-another' style='text-align: center; margin-top: 20px;'>
              <button type='button' onclick=\"document.getElementById('productForm').reset(); document.getElementById('name').focus();\" style='padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;'>
                  Yana Mahsulot Qo'shish
              </button>
          </div>";
        }
    }
    public function updateProduct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            
            if ($id && $name && $description && $price && $stock) {
                $this->product->updateProduct($id, $name, $description, $price, $stock);
                header('Location: /products');
            }
        }
    }

}
