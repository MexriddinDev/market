<?php
require_once 'productAdd.php';

echo $_POST['name'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST['name']);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'] ;


    if ($name && $description && $price && $stock) {
        product($name, $description, $price, $stock);
        echo "Mahsulot muvaffaqiyatli saqlandi!";
    } else {
        echo "Barcha maydonlarni to‘ldiring!";
    }
}