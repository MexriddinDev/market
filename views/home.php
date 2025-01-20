<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do'konni avtomatlashtirish</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background: url('https://source.unsplash.com/1600x900/?shopping') no-repeat center center/cover;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.8rem 2rem;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .top-bar {
            position: absolute;
            top: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.5rem 1rem;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            z-index: 100;
        }

        .top-bar .info,
        .top-bar .btn {
            margin-left: 1rem;
            font-size: 0.9rem;
            color: white;
        }

        .top-bar .btn {
            border: 1px solid white;
            padding: 0.4rem 1rem;
            border-radius: 5px;
        }

        .top-bar .btn:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
<!-- Top Bar -->
<div class="top-bar">
    <div class="info">(71) 205 12 22</div>
    <div class="info">🌐 UZ</div>
    <a href="/login" class="btn btn-outline-light"  >Kirish</a>
</div>

<!-- Hero Section -->
<div class="hero-section" style="background-image: url('https://media.istockphoto.com/id/1352758440/photo/paper-shopping-food-bag-with-grocery-and-vegetables.jpg?s=1024x1024&w=is&k=20&c=19xRVomvxE2TiMKXiU4t447BgeEQ5LiSZK7ebeArLKk=');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Do'konni avtomatlashtirish dasturi</h1>
        <p>Oyiga atigi x so'm evaziga zamonaviy boshqaruv tizimi!</p>
        <a href="#" class="btn btn-primary">Ko'proq bilib olish</a>
        <a href="/buy" class="btn btn-outline-light ms-3">Xarid qilish</a>
    </div>
</div>

<!-- Features Section -->
<section id="features" class="features">
    <div class="container">
        <h2 class="text-center mb-5">Xususiyatlar</h2>
        <div class="row">
            <div class="col-md-4 feature">
                <img src="https://source.unsplash.com/100x100/?analytics" alt="Feature 1">
                <h4>Statistika</h4>
                <p>Do'koningiz uchun to'liq savdo statistikasi.</p>
            </div>
            <div class="col-md-4 feature">
                <img src="https://source.unsplash.com/100x100/?security" alt="Feature 2">
                <h4>Xavfsizlik</h4>
                <p>Ma'lumotlaringiz ishonchli himoyalangan.</p>
            </div>
            <div class="col-md-4 feature">
                <img src="https://source.unsplash.com/100x100/?support" alt="Feature 3">
                <h4>Qo'llab-quvvatlash</h4>
                <p>24/7 texnik yordam xizmati.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Do'konni avtomatlashtirish dasturi. Barcha huquqlar himoyalangan.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
