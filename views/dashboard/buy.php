<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Page</title>
    <style>
        /* Umumiy uslublar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            margin: 40px 0;
        }

        .section h2 {
            font-size: 2rem;
            color: #2575fc;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .features li {
            margin: 10px 0;
            padding-left: 25px;
            position: relative;
            font-size: 1.1rem;
        }

        .features li::before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #2575fc;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #2575fc;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: background 0.3s ease;
            margin-top: 20px;
        }

        .btn:hover {
            background: #1a5bb8;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px 20px;
            font-size: 0.9rem;
            margin-top: 40px;
        }

        footer a {
            color: #2575fc;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <h1>Market Avtomatlashtirish Loyihasi</h1>
    <p>Savdoni avtomatlashtiring va mijozlar bilan ishlashni osonlashtiring!</p>
</header>

<main class="container">
    <section class="section">
        <h2>Loyiha haqida</h2>
        <p>Marketlar uchun maxsus ishlab chiqilgan ushbu loyiha quyidagi afzalliklarga ega:</p>
        <ul class="features">
            <li>Tez va aniq hisob-kitob tizimi</li>
            <li>Mijozlar uchun qulay interfeys</li>
            <li>Hisob-kitob xavfsizligi</li>
            <li>Oson integratsiya va kengaytirish imkoniyati</li>
        </ul>
    </section>

    <section class="section">
        <h2>Sotib olish</h2>
        <p>Loyihani sotib olish uchun pastdagi tugmani bosing:</p>
        <a href="/buypage" class="btn">Hozir sotib olish</a>
    </section>
</main>

<footer>
    <p>&copy; 2025 Market Avtomatlashtirish. <a href="#">Maxfiylik siyosati</a>.</p>
</footer>
</body>
</html>

