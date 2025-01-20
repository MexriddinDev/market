<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirish sahifasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://cdn.dribbble.com/userupload/13757646/file/original-f085dfed4ba69f41a38128c8f0136981.png?resize=2400x1800&vertical=center') no-repeat center center/cover;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://cdn.dribbble.com/userupload/13757646/file/original-f085dfed4ba69f41a38128c8f0136981.png?resize=2400x1800&vertical=center') no-repeat center center/cover;
            filter: blur(8px); /* Xira qilish darajasi */
            z-index: -1;
        }


        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
            text-align: center;
            color: #333;
        }

        .logo {
            margin-bottom: 2rem;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        .form-control {
            background-color: rgba(240, 240, 240, 1);
            border: 1px solid #ccc;
            color: #333;
        }

        .form-control:focus {
            background-color: rgba(250, 250, 250, 1);
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.8rem 2rem;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .additional-links {
            margin-top: 1.5rem;
        }

        .additional-links a {
            color: #007bff;
            text-decoration: none;
        }

        .additional-links a:hover {
            text-decoration: underline;
        }

        .footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 0.8rem;
            color: white;
        }
    </style>
</head>
<body>
<div class="login-container">
    <!-- Logo -->
    <div class="logo">
        <img src="https://cdn.iconscout.com/icon/free/png-512/free-supermarket-icon-download-in-svg-png-gif-file-formats--cart-shopping-item-online-store-pack-miscellaneous-icons-288208.png?f=webp&w=256" alt="Do'kon Logo">
    </div>

    <!-- Login Form -->
    <form>
        <div class="mb-4">
            <input type="text" class="form-control" placeholder="Telefon yoki Email" required>
        </div>
        <div class="mb-4">
            <input type="password" class="form-control" placeholder="Parol" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Kirish</button>
    </form>

    <!-- Additional Links -->
    <div class="additional-links">
        <div class="mt-3">
            <a href="#">Parolni unutdingizmi?</a>
        </div>
        <div class="mt-2">
<!--            <span>Akkauntingiz yo'qmi? </span>-->
<!--            <a href="#">Ro'yxatdan o'ting</a>-->
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    &copy; 2025 Do'konni avtomatlashtirish dasturi. Barcha huquqlar himoyalangan.
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
