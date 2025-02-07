<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biz haqimizda - Market Automation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 40px 0;
            background: #007bff;
            color: white;
            border-radius: 10px;
        }

        header h1 {
            font-size: 2.8rem;
        }

        /* Kompaniya haqida bo'lim */
        .company-info {
            margin: 40px 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .company-text {
            flex: 2;
            margin-right: 20px;
        }

        .company-text h2 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .company-text p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .company-image {
            flex: 1;
            text-align: center;
        }

        .company-image img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        /* Jamoa profillari */
        .team-section {
            margin: 50px 0;
        }

        .team-title {
            text-align: center;
            font-size: 2rem;
            color: #007bff;
        }

        .team-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .team-member {
            background: white;
            text-align: center;
            padding: 20px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            max-width: 150px;
        }

        .team-member h3 {
            font-size: 1.5rem;
            margin: 10px 0;
            color: #007bff;
        }

        .team-member p {
            font-size: 1rem;
            color: #555;
        }

        /* Mijozlar fikrlari */
        .testimonials-section {
            background: #007bff;
            color: white;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            margin-top: 40px;
        }

        .testimonials-section h2 {
            font-size: 2.5rem;
        }

        .testimonial {
            font-size: 1.2rem;
            margin: 20px 0;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #777;
        }

        @media (max-width: 768px) {
            .company-info {
                flex-direction: column;
            }

            .company-text {
                margin-right: 0;
            }

            .team-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Bizning Marketga Xush Kelibsiz!</h1>
        <p>Siz uchun eng yaxshi yechimlarni taklif etuvchi kompaniya.</p>
    </header>

    <!-- Kompaniya haqida -->
    <div class="company-info">
        <div class="company-text">
            <h2>Kompaniyamiz haqida</h2>
            <p>Bizning kompaniyamiz mijozlarimizga yuqori sifatli mahsulotlar va xizmatlarni taqdim etadi. Innovatsion yondashuv orqali har doim yangi marralarni zabt etishga intilamiz.</p>
            <p>Maqsadimiz — sizning hayotingizni yanada qulayroq qilish va biznesingiz muvaffaqiyatini ta'minlashdir.</p>
        </div>
        <div class="company-image">
            <img src="https://source.unsplash.com/300x300/?business,success" alt="Bizning Kompaniya">
        </div>
    </div>

    <!-- Jamoa bo'limi -->
    <section class="team-section">
        <h2 class="team-title">Bizning Jamoa</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="https://source.unsplash.com/150x150/?person,manager" alt="Olimjon">
                <h3>Olimjon Xamroyev</h3>
                <p>Bosh direktor</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/150x150/?person,developer" alt="Umid">
                <h3>Umid Aliyev</h3>
                <p>Dasturchi</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/150x150/?person,designer" alt="Dilnoza">
                <h3>Dilnoza Karimova</h3>
                <p>Dizayner</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/150x150/?person,marketer" alt="Aziz">
                <h3>Aziz To'xtayev</h3>
                <p>Marketing bo'yicha mutaxassis</p>
            </div>
        </div>
    </section>

    <!-- Mijozlar fikrlari -->
    <section class="testimonials-section">
        <h2>Mijozlar Fikrlari</h2>
        <p class="testimonial">"Marketdan har doim qoniqaman! Xizmat juda a'lo darajada." — <strong>Farhod</strong></p>
        <p class="testimonial">"Mahsulotlar sifati juda yuqori, buni barcha mijozlarga tavsiya qilaman." — <strong>Saida</strong></p>
    </section>

    <!-- Footer -->
    <div class="footer">
        &copy; 2025 Market Automation. Barcha huquqlar himoyalangan.
    </div>
</div>
</body>
</html>
