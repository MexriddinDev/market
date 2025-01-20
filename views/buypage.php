<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To‘lov sahifasi</title>
    <style>

        /* Umumiy uslublar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        header p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .container {
            width: 900px;
            height: 500px;
            margin: 30px auto;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        .btn {
            display: inline-block;
            width: 100%;
            background: #2575fc;
            color: white;
            text-align: center;
            text-decoration: none;
            padding: 15px;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: background 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #1a5bb8;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #222;
            color: white;
            font-size: 0.9rem;
        }

        footer a {
            color: #2575fc;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        #cvv-field {
            visibility: hidden;
            height: 0;
            margin: 0;
        }
    </style>
    <script>
        function toggleFields() {
            const cardType = document.getElementById("card-type").value;
            const cvvField = document.getElementById("cvv-field");
            const cvvInput = document.getElementById("cvv");

            if (cardType === "visa" || cardType === "mastercard") {
                cvvField.style.visibility = "visible";
                cvvField.style.height = "auto";
                cvvInput.required = true;
            } else {
                cvvField.style.visibility = "hidden";
                cvvField.style.height = "0";
                cvvInput.required = false;
            }
        }

        function formatExpiryDate(input) {
            const value = input.value.replace(/[^0-9]/g, ""); // Faqat raqamlarni olish
            if (value.length > 2) {
                input.value = value.slice(0, 2) + "/" + value.slice(2, 4);
            } else {
                input.value = value;
            }
        }
    </script>
</head>
<body>
<header>
    <h1>To‘lov sahifasi</h1>
    <p>Xavfsiz va ishonchli to‘lov tizimi</p>
</header>

<div class="container">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="name">Ism va familiya</label>
            <input type="text" id="name" name="name" placeholder="Ismingizni va familiyangizni kiriting" required>
        </div>

        <div class="form-group">
            <label for="card-type">Karta turi</label>
            <select id="card-type" name="card-type" onchange="toggleFields()" required>
                <option value="" disabled selected>Karta turini tanlang</option>
                <option value="visa">Visa</option>
                <option value="mastercard">MasterCard</option>
                <option value="humo">Humo</option>
                <option value="uzcard">UzCard</option>
            </select>
        </div>

        <div class="form-group">
            <label for="card-number">Karta raqami</label>
            <input type="text" id="card-number" name="card-number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" required>
        </div>

        <div class="form-group">
            <label for="expiry-date">Amal qilish muddati</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" maxlength="5" oninput="formatExpiryDate(this)" required>
        </div>

        <div class="form-group" id="cvv-field">
            <label for="cvv">CVV</label>
            <input type="password" id="cvv" name="cvv" placeholder="XXX" maxlength="3">
        </div>

        <button type="submit" class="btn">To‘lovni amalga oshirish</button>
    </form>
</div>

<footer>
    <p>&copy; 2025 Market Avtomatlashtirish. <a href="#">Maxfiylik siyosati</a>.</p>
</footer>
</body>
</html>
