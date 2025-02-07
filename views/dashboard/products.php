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
            font-size: 0.9rem;
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
            height: 180px;
            object-fit: cover;
        }
        .card-body {
            padding: 0.75rem;
        }
        .card-title {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        .card-footer {
            background: transparent;
            border-top: none;
            padding: 0.5rem;
        }
        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-3">
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
//                    dd($product['image_url']);
                    echo "
                        <div class='col'>
                            <div class='card product-card'>
                                <span class='badge bg-success stock-badge'>" . ($product['stock'] > 0 ? "In Stock" : "Out of Stock") . "</span>
                                 
                                <img src='" . ($product['image_url']) ."' class='card-img-top product-img' alt='Product Image'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . htmlspecialchars($product['name']) . "</h5>
                                    <p class='card-text text-primary fw-bold'>" . number_format($product['price']) . " UZS</p>
                                    <p class='card-text small text-muted'>Stock: " . $product['stock'] . "  kg</p>
                                    
                                </div>
                                <div class='card-footer p-2'>
                                    <div class='d-flex gap-1'>
                                        <button type='button' class='btn btn-outline-primary btn-action flex-grow-1' onclick='editProduct(" . json_encode($product) . ")'>
                                            <i class='fas fa-edit'></i>
                                        </button>
                                        <form action='/deleteProduct' method='POST' class='flex-grow-1'>
                                            <input type='hidden' name='id' value='" . htmlspecialchars($product['id']) . "'>
                                            <button type='submit' class='btn btn-outline-danger btn-action w-100'>
                                                <i class='fas fa-trash'></i>
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
    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm" action="/saveProduct" method="POST">
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
                            <input type="number" name="price" class="form-control" placeholder="Enter price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock Quantity</label>
                            <input type="number" name="stock" class="form-control" placeholder="Enter stock quantity" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Unit</label>
                            <select class="form-select" name="unit" required>
                                <option value="" disabled selected>Select unit</option>
                                <option value="piece">Piece</option>
                                <option value="kg">Kilogram</option>
                                <option value="liter">Liter</option>
                                <option value="box">Box</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Image</label>
                            <input type="text" name="image_url" class="form-control" accept="image/*"  required>
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="/updateProduct" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id">
                        <div class="mb-3">
                            <label class="form-label">Product Image</label>
                            <input type="text" name="image" class="form-control" accept="image/*">
                            <div id="currentImage" class="mt-2">
                                <small class="text-muted">Current image will be kept if no new image is uploaded</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <div class="input-group">
                                <input type="number" name="price" class="form-control" required>
                                <span class="input-group-text">UZS</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock Quantity</label>
                            <input type="number" name="stock" class="form-control" required>
                            <div class="form-text">Available units in stock</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Unit</label>
                            <select class="form-select" name="unit" required>
                                <option value="" disabled>Select unit</option>
                                <option value="piece">Piece</option>
                                <option value="kg">Kilogram</option>
                                <option value="liter">Liter</option>
                                <option value="box">Box</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editProduct(product) {
            const modal = document.getElementById('editModal');
            modal.querySelector('[name="id"]').value = product.id;
            modal.querySelector('[name="name"]').value = product.name;
            modal.querySelector('[name="description"]').value = product.description;
            modal.querySelector('[name="price"]').value = product.price;
            modal.querySelector('[name="stock"]').value = product.stock;
            modal.querySelector('[name="unit"]').value = product.unit;
            
            // Show current image preview
            const currentImage = modal.querySelector('#currentImage');
            if (product.image_url) {
                currentImage.innerHTML = `
                    <img src="${product.image_url}" alt="Current product image" 
                        style="max-width: 100px; height: auto;" class="mt-2">
                    <small class="text-muted d-block">Current image</small>
                `;
            }
            
            new bootstrap.Modal(modal).show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
