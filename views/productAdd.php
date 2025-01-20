<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsulot Qo'shish</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input, textarea, select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .add-another {
            text-align: center;
            margin-top: 20px;
        }

        .add-another button {
            background-color: #008CBA;
        }

        .add-another button:hover {
            background-color: #007BB5;
        }
    </style>
</head>
<body>
<div class="container" >
    <h1>Yangi Mahsulot Qo'shish</h1>
    <form id="productForm"  action="/saveProduct"  method="POST">
        <label for="name">Mahsulot Nomi</label>
        <input type="text" id="name" name="name" placeholder="Mahsulot nomini kiriting" required>

        <label for="description">Tavsif</label>
        <textarea id="description" name="description" rows="4" placeholder="Mahsulot tavsifini kiriting" required></textarea>

        <label for="price">Narxi</label>
        <input type="number" id="price" name="price" placeholder="Mahsulot narxini kiriting" step="0.01" required>

        <label for="stock">Miqdori</label>
        <div style="display: flex; gap: 10px;">
            <input type="number" id="stock" name="stock" placeholder="Miqdorni kiriting" required>
            <select id="stockUnit" name="stockUnit" required>
                <option value="">Birlikni tanlang</option>
                <option value="pieces">Dona</option>
                <option value="kg">Kg</option>
                <option value="liters">Litr</option>
            </select>
        </div>

        <button type="submit">Tasdiqlash</button>
    </form>

    <div  class="add-another">
        <button  type="button" onclick="document.getElementById('productForm').reset(); document.getElementById('name').focus();">Yana Mahsulot Qo'shish</button>
    </div>
</div>
</body>
</html>
