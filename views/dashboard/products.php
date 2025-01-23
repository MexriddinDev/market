<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management - Market System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <?php include 'components/sidebar.php'; ?>
        
        <div class="flex-1 flex flex-col">
            <?php include 'components/header.php'; ?>
            
            <main class="flex-1 p-6">
                <!-- Page Title and Actions -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Products Management</h1>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
                            onclick="document.getElementById('addProductModal').classList.remove('hidden')">
                        <i class="fas fa-plus mr-2"></i>Add New Product
                    </button>
                </div>

                <!-- Filters and Search -->
                <div class="bg-white p-4 rounded-lg shadow mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="relative">
                            <input type="text" placeholder="Search products..." 
                                class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <select class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
                            <option value="">All Categories</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="food">Food & Beverages</option>
                        </select>
                        <select class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
                            <option value="">Stock Status</option>
                            <option value="in_stock">In Stock</option>
                            <option value="low_stock">Low Stock</option>
                            <option value="out_of_stock">Out of Stock</option>
                        </select>
                        <select class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
                            <option value="">Sort By</option>
                            <option value="name_asc">Name (A-Z)</option>
                            <option value="name_desc">Name (Z-A)</option>
                            <option value="price_asc">Price (Low to High)</option>
                            <option value="price_desc">Price (High to Low)</option>
                        </select>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Product Card -->
                    <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
                        <img src="https://via.placeholder.com/300" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                            <p class="text-sm text-gray-600 mb-2">Category: Electronics</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-lg font-bold text-blue-600">$299.99</span>
                                <span class="text-sm text-gray-500">Stock: 45</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button class="text-blue-600 hover:text-blue-700">
                                    <i class="fas fa-edit mr-1"></i>Edit
                                </button>
                                <button class="text-red-600 hover:text-red-700">
                                    <i class="fas fa-trash mr-1"></i>Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat product cards -->
                </div>

                <!-- Add Product Modal -->
                <div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg w-full max-w-2xl mx-auto mt-20 p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">Add New Product</h2>
                            <button onclick="this.closest('#addProductModal').classList.add('hidden')"
                                    class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <form class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Product Name</label>
                                    <input type="text" class="w-full border rounded-lg px-3 py-2">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Category</label>
                                    <select class="w-full border rounded-lg px-3 py-2">
                                        <option value="">Select Category</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="clothing">Clothing</option>
                                        <option value="food">Food & Beverages</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Price</label>
                                    <input type="number" step="0.01" class="w-full border rounded-lg px-3 py-2">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Stock Quantity</label>
                                    <input type="number" class="w-full border rounded-lg px-3 py-2">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Description</label>
                                <textarea rows="3" class="w-full border rounded-lg px-3 py-2"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Product Image</label>
                                <input type="file" class="w-full border rounded-lg px-3 py-2">
                            </div>
                            <div class="flex justify-end space-x-3">
                                <button type="button" 
                                        onclick="this.closest('#addProductModal').classList.add('hidden')"
                                        class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">
                                    Cancel
                                </button>
                                <button type="submit" 
                                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                    Add Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

