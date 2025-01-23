<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .settings-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .settings-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        .form-floating > label {
            padding: 1rem 0.75rem;
        }
        .settings-icon {
            font-size: 2rem;
            color: #4e73df;
        }
        .status-badge {
            transition: all 0.3s;
        }
        .progress {
            height: 8px;
            border-radius: 4px;
        }
        .section-header {
            border-left: 4px solid #4e73df;
            padding-left: 1rem;
        }
    /* Analytics Cards */
    .analytics-card {
        background: linear-gradient(45deg, #4e73df, #224abe);
        color: white;
        border-radius: 10px;
        overflow: hidden;
    }
    .analytics-icon {
        font-size: 2.5rem;
        opacity: 0.8;
    }
    .trend-indicator {
        font-size: 0.8rem;
        padding: 0.2rem 0.5rem;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.2);
    }
    .chart-container {
        position: relative;
        height: 300px;
        margin-bottom: 1rem;
    }
    @media (max-width: 768px) {
        .chart-container {
            height: 200px;
        }
    }
</style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <!-- Dashboard Header -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-header mb-4">Analytics Overview</h2>
            </div>
            <!-- Analytics Cards -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="analytics-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-white-50">Total Customers</h6>
                                <h2 class="mb-0">2,849</h2>
                                <div class="trend-indicator">
                                    <i class='bx bx-up-arrow-alt'></i> +12.5%
                                </div>
                            </div>
                            <i class='bx bx-group analytics-icon'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="analytics-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-white-50">Total Sales</h6>
                                <h2 class="mb-0">$847.5K</h2>
                                <div class="trend-indicator">
                                    <i class='bx bx-up-arrow-alt'></i> +8.3%
                                </div>
                            </div>
                            <i class='bx bx-dollar-circle analytics-icon'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="analytics-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-white-50">Avg Order Value</h6>
                                <h2 class="mb-0">$297.5</h2>
                                <div class="trend-indicator">
                                    <i class='bx bx-up-arrow-alt'></i> +5.2%
                                </div>
                            </div>
                            <i class='bx bx-cart analytics-icon'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="analytics-card card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-white-50">Monthly Revenue</h6>
                                <h2 class="mb-0">$124.8K</h2>
                                <div class="trend-indicator">
                                    <i class='bx bx-up-arrow-alt'></i> +15.7%
                                </div>
                            </div>
                            <i class='bx bx-line-chart analytics-icon'></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Charts Section -->
            <div class="col-12 mb-4">
                <div class="settings-card card">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class='bx bx-line-chart me-2 text-primary'></i>
                            Sales Performance
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="chart-container">
                                    <canvas id="salesChart"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chart-container">
                                    <canvas id="customerDistribution"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dashboard Header -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-header mb-4">Dashboard Settings</h2>
            </div>
            <!-- Stats Cards -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="settings-card card bg-primary text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-white-75">System Status</h6>
                                <h3 class="mb-0">Optimal</h3>
                            </div>
                            <i class='bx bx-check-circle settings-icon text-white-50'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="settings-card card bg-success text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-white-75">Last Backup</h6>
                                <h3 class="mb-0">2 hrs ago</h3>
                            </div>
                            <i class='bx bx-cloud-upload settings-icon text-white-50'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Sections -->
        <div class="row">
            <!-- General Settings -->
            <div class="col-lg-6 mb-4">
                <div class="settings-card card">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class='bx bx-cog me-2 text-primary'></i>
                            General Settings
                        </h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="siteName" placeholder="Site Name">
                                <label for="siteName">Site Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="siteUrl" placeholder="Site URL">
                                <label for="siteUrl">Site URL</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="timezone">
                                    <option value="UTC">UTC</option>
                                    <option value="EST">EST</option>
                                    <option value="PST">PST</option>
                                </select>
                                <label for="timezone">Timezone</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="col-lg-6 mb-4">
                <div class="settings-card card">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class='bx bx-shield-quarter me-2 text-primary'></i>
                            Security Settings
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="2fa">
                            <label class="form-check-label" for="2fa">Enable Two-Factor Authentication</label>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="loginNotification">
                            <label class="form-check-label" for="loginNotification">Email Login Notifications</label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Strength</label>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email Settings -->
            <div class="col-lg-6 mb-4">
                <div class="settings-card card">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class='bx bx-envelope me-2 text-primary'></i>
                            Email Settings
                        </h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="smtpHost" placeholder="SMTP Host">
                                <label for="smtpHost">SMTP Host</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="smtpPort" placeholder="SMTP Port">
                                <label for="smtpPort">SMTP Port</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="smtpUser" placeholder="SMTP Username">
                                <label for="smtpUser">SMTP Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="smtpPass" placeholder="SMTP Password">
                                <label for="smtpPass">SMTP Password</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Backup Settings -->
            <div class="col-lg-6 mb-4">
                <div class="settings-card card">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class='bx bx-cloud me-2 text-primary'></i>
                            Backup Settings
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="autoBackup">
                            <label class="form-check-label" for="autoBackup">Enable Automatic Backups</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="backupFrequency">
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                            <label for="backupFrequency">Backup Frequency</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="backupLocation" placeholder="Backup Location">
                            <label for="backupLocation">Backup Location</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Save Changes Button -->
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-lg px-4">
                    <i class='bx bx-save me-2'></i>
                    Save Changes
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize Charts
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const customerCtx = document.getElementById('customerDistribution').getContext('2d');
        
        // Sales Chart
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Monthly Sales',
                    data: [65, 59, 80, 81, 56, 85],
                    borderColor: '#4e73df',
                    tension: 0.4,
                    fill: true,
                    backgroundColor: 'rgba(78, 115, 223, 0.1)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });
        
        // Customer Distribution Chart
        new Chart(customerCtx, {
            type: 'doughnut',
            data: {
                labels: ['New', 'Regular', 'VIP'],
                datasets: [{
                    data: [30, 50, 20],
                    backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
        // Add animation classes to elements when they come into view
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.settings-card');
            cards.forEach(card => {
                card.addEventListener('mouseover', function() {
                    this.classList.add('shadow-lg');
                });
                card.addEventListener('mouseout', function() {
                    this.classList.remove('shadow-lg');
                });
            });

            // Form interaction feedback
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                const inputs = form.querySelectorAll('input, select');
                inputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.closest('.form-floating').classList.add('border-primary');
                    });
                    input.addEventListener('blur', function() {
                        this.closest('.form-floating').classList.remove('border-primary');
                    });
                });
            });
        });
    </script>
</body>
</html>

