<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="bg-white w-64 min-h-screen flex flex-col shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in fixed md:static z-30" id="sidebar">
            <div class="p-4 border-b flex items-center justify-between">
                <h2 class="text-2xl font-bold text-gray-800">Market Management</h2>
                <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                    <i class="fas fa-close text-xl"></i>
                </button>
            </div>
            <nav class="flex-grow p-4">
                <a href="dashboard.php" class="block p-3 mb-2 text-gray-800 bg-gray-100 rounded-lg">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <a href="/products" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-box mr-2"></i> Products
                </a>
                <a href="inventory.php" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-warehouse mr-2"></i> Inventory
                </a>
                <a href="orders.php" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-shopping-cart mr-2"></i> Orders
                </a>
                <a href="customers.php" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-users mr-2"></i> Customers
                </a>
                <a href="suppliers.php" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-truck mr-2"></i> Suppliers
                </a>
                <a href="reports.php" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-chart-bar mr-2"></i> Reports
                </a>
                <a href="settings.php" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-cog mr-2"></i> Settings
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="h-16 flex items-center justify-between px-4">
                    <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                            <span class="text-gray-700 font-medium">Admin User</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 p-4 md:p-6">
                <!-- Quick Actions -->
                <div class="mb-8">
                    <div class="flex flex-wrap gap-4">
                        <a href="products.php?action=add" class="flex-1 min-w-[200px] bg-blue-600 text-white p-4 rounded-lg shadow hover:bg-blue-700 transition">
                            <i class="fas fa-plus mb-2 text-2xl"></i>
                            <h3 class="font-semibold">Add New Product</h3>
                            <p class="text-sm opacity-90">Add products to inventory</p>
                        </a>
                        <a href="orders.php?action=new" class="flex-1 min-w-[200px] bg-green-600 text-white p-4 rounded-lg shadow hover:bg-green-700 transition">
                            <i class="fas fa-shopping-cart mb-2 text-2xl"></i>
                            <h3 class="font-semibold">New Order</h3>
                            <p class="text-sm opacity-90">Create a new order</p>
                        </a>
                        <a href="inventory.php?action=check" class="flex-1 min-w-[200px] bg-yellow-600 text-white p-4 rounded-lg shadow hover:bg-yellow-700 transition">
                            <i class="fas fa-boxes mb-2 text-2xl"></i>
                            <h3 class="font-semibold">Check Inventory</h3>
                            <p class="text-sm opacity-90">View stock levels</p>
                        </a>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Today's Sales</h3>
                            <i class="fas fa-dollar-sign text-blue-500"></i>
                        </div>
                        <p class="text-2xl font-bold mt-2">$2,459.85</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-sm text-green-500">+15% from yesterday</span>
                            <a href="reports.php" class="text-xs text-blue-600 hover:underline">Details</a>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Total Products</h3>
                            <i class="fas fa-box text-green-500"></i>
                        </div>
                        <p class="text-2xl font-bold mt-2">1,247</p>
                        <p class="text-sm text-green-500 mt-2">23 low stock</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Active Orders</h3>
                            <i class="fas fa-shopping-cart text-yellow-500"></i>
                        </div>
                        <p class="text-2xl font-bold mt-2">64</p>
                        <p class="text-sm text-yellow-500 mt-2">12 pending delivery</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Total Customers</h3>
                            <i class="fas fa-users text-purple-500"></i>
                        </div>
                        <p class="text-2xl font-bold mt-2">847</p>
                        <p class="text-sm text-green-500 mt-2">+12 this week</p>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white rounded-lg shadow p-4 mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Recent Orders</h2>
                        <a href="orders.php" class="text-blue-600 hover:text-blue-800">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="text-left text-gray-500">
                                    <th class="py-3 px-4">Order ID</th>
                                    <th class="py-3 px-4">Customer</th>
                                    <th class="py-3 px-4">Products</th>
                                    <th class="py-3 px-4">Total</th>
                                    <th class="py-3 px-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="py-3 px-4">#ORD-2023-1234</td>
                                    <td class="py-3 px-4">John Smith</td>
                                    <td class="py-3 px-4">3 items</td>
                                    <td class="py-3 px-4">$145.85</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Completed</span></td>
                                </tr>
                                <tr class="border-t">
                                    <td class="py-3 px-4">#ORD-2023-1235</td>
                                    <td class="py-3 px-4">Sarah Johnson</td>
                                    <td class="py-3 px-4">1 item</td>
                                    <td class="py-3 px-4">$49.99</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Pending</span></td>
                                </tr>
                                <tr class="border-t">
                                    <td class="py-3 px-4">#ORD-2023-1236</td>
                                    <td class="py-3 px-4">Michael Brown</td>
                                    <td class="py-3 px-4">2 items</td>
                                    <td class="py-3 px-4">$89.97</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Low Stock Alert -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Low Stock Alert</h2>
                        <a href="inventory.php" class="text-blue-600 hover:text-blue-800">Manage Inventory</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="text-left text-gray-500">
                                    <th class="py-3 px-4">Product</th>
                                    <th class="py-3 px-4">Category</th>
                                    <th class="py-3 px-4">Current Stock</th>
                                    <th class="py-3 px-4">Minimum Stock</th>
                                    <th class="py-3 px-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="py-3 px-4">Product A</td>
                                    <td class="py-3 px-4">Electronics</td>
                                    <td class="py-3 px-4 text-red-500">5</td>
                                    <td class="py-3 px-4">20</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-600 hover:text-blue-800">Reorder</button>
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td class="py-3 px-4">Product B</td>
                                    <td class="py-3 px-4">Food</td>
                                    <td class="py-3 px-4 text-yellow-500">12</td>
                                    <td class="py-3 px-4">25</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-600 hover:text-blue-800">Reorder</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

