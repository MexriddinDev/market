<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .product-card {
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .stock-badge {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .product-img {
            height: 200px;
            object-fit: cover;
        }
        .card-footer {
            background: transparent;
            border-top: none;
        }
        .search-box {
            max-width: 400px;
        }
    </style>
</head>
<body class="bg-light">
<div class="container-fluid py-4">
    <!-- Header Section -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-4">
            <h2 class="mb-0">Product Management</h2>
        </div>
        <div class="col-md-4">
            <div class="search-box mx-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search products...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-end">
            <div class="btn-group">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="fas fa-plus"></i> Add Product
                </button>
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-filter"></i> Filter
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">All Products</a></li>
                    <li><a class="dropdown-item" href="#">In Stock</a></li>
                    <li><a class="dropdown-item" href="#">Out of Stock</a></li>
                    <li><a class="dropdown-item" href="#">On Sale</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-4">
        <?php
        require_once 'Models/Product.php';

        
        try {
            $productModel = new \Models\Product();
            $products = $productModel->getAllProducts();

            if ($products === false) {
                throw new Exception("Error fetching products from database");
            }
        if (!empty($products)) {
            foreach ($products as $product) {
                echo "
            <div class='col'>
                <div class='card product-card'>
                    <span class='badge bg-success stock-badge'>" . ($product['stock'] > 0 ? "In Stock" : "Out of Stock") . "</span>
                    <img src='/assets/images/placeholder.jpg' class='card-img-top product-img' alt='Product Image'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . htmlspecialchars($product['name']) . "</h5>
                        <p class='card-text text-primary fw-bold'>" . number_format($product['price'], 2) . " UZS</p>
                        <p class='card-text small text-muted'>Stock: " . $product['stock'] . " units</p>
                    </div>
                    <div class='card-footer'>
                        <div class='d-flex justify-content-between gap-2'>
                            <form class='flex-fill'>
                                <button class='btn btn-outline-primary w-100'>
                                    <i class='fas fa-edit'></i> Edit
                                </button>
                            </form>
                            <form action='/deleteProduct' method='POST' class='flex-fill'>
                                <input type='hidden' name='id' value='" . htmlspecialchars($product['id']) . "'>
                                <button type='submit' class='btn btn-outline-danger w-100'>
                                    <i class='fas fa-trash'></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    

                </div>
            </div>
            ";
            }
        } else {
            echo "<div class='col-12'><div class='alert alert-info'>No products available.</div></div>";
        }
    } catch (Exception $e) {
        echo "<div class='col-12'><div class='alert alert-danger'>Error: " . htmlspecialchars($e->getMessage()) . "</div></div>";
    }
    ?>
    </div>


<!-- Add Product Modal -->
<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="productForm"  action="/saveProduct"  method="POST">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Enter description" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price"  class="form-control" placeholder="Enter price" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock Quantity</label>
                        <input type="number" name="stock" class="form-control" placeholder="Enter stock quantity" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unit</label>
                        <select class="form-select" required>
                            <option value="" disabled selected>Select unit</option>
                            <option value="piece">Piece</option>
                            <option value="kg">Kilogram</option>
                            <option value="liter">Liter</option>
                            <option value="box">Box</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Image</label>
                        <input type="text" class="form-control" accept="image/*" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

