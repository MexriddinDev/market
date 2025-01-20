<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biz haqimizda</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .about-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            text-align: center;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-content {
            flex: 2;
            margin-left: 20px;
        }

        .about-content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
        }

        .about-content p {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #555;
        }

        .contact-section {
            text-align: center;
            margin-top: 30px;
        }

        .contact-section p {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }

        .contact-icons a {
            text-decoration: none;
            color: #333;
            font-size: 2rem;
            transition: color 0.3s ease;
        }

        .contact-icons a:hover {
            color: #007bff;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #777;
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                text-align: center;
            }

            .about-content {
                margin-left: 0;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="about-section">
        <div class="about-image">
            <img src="https://source.unsplash.com/500x500/?business,team" alt="Biz haqimizda">
        </div>
        <div class="about-content">
            <h1>Biz haqimizda</h1>
            <p>Bizning kompaniyamiz mijozlarimizga eng yuqori sifatli mahsulotlar va xizmatlarni taqdim etishga intiladi. Har kuni innovatsiyalar va samaradorlik orqali jamoamiz siz uchun eng yaxshi yechimlarni yaratadi.</p>
            <p>Bizning maqsadimiz - hayotingizni osonlashtirish va biznesingiz muvaffaqiyatini ta'minlashdir. Birgalikda katta marralarga erishamiz!</p>
        </div>
    </div>

    <div class="contact-section">
        <p>Biz bilan bog'laning:</p>
        <p>Telefon: <a href="tel:+998901234567">+998 90 123 45 67</a></p>
        <div class="contact-icons">
            <a href="https://t.me/username" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111646.png" alt="Telegram" width="40">
            </a>
            <a href="https://instagram.com/username" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" width="40">
            </a>
            <a href="mailto:example@gmail.com" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" width="40">
            </a>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Sizning Kompaniya Nomingiz. Barcha huquqlar himoyalangan.
    </div>
</div>
</body>
</html>
