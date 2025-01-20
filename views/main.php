<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do'kon Interfeysi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }

        .header {
            background: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #0f172a;
        }

        .main-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .products-section {
            background-color: transparent;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .product-item {
            background: white;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .product-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1);
        }

        .product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .product-info {
            padding: 1rem;
        }

        .product-info h5 {
            margin: 0 0 0.5rem 0;
            font-size: 1.1rem;
            font-weight: 600;
            color: #0f172a;
        }

        .product-info span {
            font-size: 1rem;
            color: #64748b;
            font-weight: 500;
        }

        .product-info button {
            margin-top: 1rem;
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #2563eb;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .product-info button:hover {
            background-color: #1d4ed8;
        }

        .calculator {
            margin-top: auto;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }

        .calculator .btn {
            width: 100%;
            padding: 15px;
            font-size: 1.2rem;
        }

        .checkout-header {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .total {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-brand">Do'kon</div>
            <div class="nav-links">
                <a href="#">Bosh sahifa</a>
                <a href="#">Mahsulotlar</a>
                <a href="#">Kontaktlar</a>
            </div>
        </nav>
    </header>

    <div class="main-container">
        <div class="products-section">
            <h3>Mahsulotlar</h3>
            <div class="products-grid">
                <div class="product-item">
                    <img src="https://via.placeholder.com/300x180" alt="Mahsulot">
                    <div class="product-info">
                        <h5>Banana 1kg</h5>
                        <span>20,000 UZS</span>
                        <button>Savatga qo'shish</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="https://via.placeholder.com/300x180" alt="Mahsulot">
                    <div class="product-info">
                        <h5>Chips</h5>
                        <span>14,000 UZS</span>
                        <button>Savatga qo'shish</button>
                    </div>
                </div>

                <div class="product-item">
                    <img src="https://via.placeholder.com/300x180" alt="Mahsulot">
                    <div class="product-info">
                        <h5>Mandarin 1kg</h5>
                        <span>27,000 UZS</span>
                        <button>Savatga qo'shish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    // Bu yerda JavaScript orqali hisobni amalga oshirish mumkin
</script>
</body>
</html>
