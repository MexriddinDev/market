<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
        }
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
        }
        .main-content {
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
        }
        .sidebar.collapsed {
            margin-left: calc(-1 * var(--sidebar-width));
        }
        .main-content.expanded {
            margin-left: 0;
        }
        .nav-link {
            padding: 0.8rem 1rem;
            color: var(--bs-body-color);
            transition: all 0.3s;
        }
        .nav-link:hover {
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .nav-link.active {
            background-color: var(--bs-primary);
            color: white;
        }
        .stats-card {
            transition: transform 0.3s;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
        .activity-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
        }
        .activity-active {
            background-color: #28a745;
        }
        .activity-inactive {
            background-color: #dc3545;
        }
        [data-bs-theme="dark"] {
            --bs-body-bg: #1a1d20;
            --bs-body-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="sidebar bg-body-tertiary border-end p-3">
        <div class="d-flex align-items-center mb-4 mt-2">
            <h4 class="m-0">Admin Panel</h4>
            <button class="btn btn-link ms-auto d-lg-none" id="sidebarToggle">
                <i class="bi bi-list fs-4"></i>
            </button>
        </div>
        <div class="nav flex-column">
            <a href="#dashboard" class="nav-link active mb-2">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="/management" class="nav-link mb-2">
                <i class="bi bi-people me-2"></i> User Management
            </a>
            <a href="/active-monitoring" class="nav-link mb-2">
                <i class="bi bi-activity me-2"></i> Activity Monitoring
            </a>
            <a href="/settings" class="nav-link mb-2">
                <i class="bi bi-gear me-2"></i> Settings
            </a>
        </div>
        <div class="mt-auto pt-3 border-top">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="darkModeToggle">
                <label class="form-check-label" for="darkModeToggle">Dark Mode</label>
            </div>
        </div>
    </div>
dark
    <div class="main-content p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dashboard Overview</h2>
            <button class="btn btn-primary">
                <i class="bi bi-plus-circle me-2"></i>Add New User
            </button>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Active Users</h6>
                        <h3 class="card-text">247</h3>
                        <div class="text-success">
                            <i class="bi bi-arrow-up me-1"></i>12% increase
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Inactive Users</h6>
                        <h3 class="card-text">23</h3>
                        <div class="text-danger">
                            <i class="bi bi-arrow-down me-1"></i>3 new
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Login Attempts</h6>
                        <h3 class="card-text">1,284</h3>
                        <div class="text-muted">
                            Last 24 hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Auto-Deactivated</h6>
                        <h3 class="card-text">8</h3>
                        <div class="text-muted">
                            This week
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">User Activity Management</h5>
                <div class="btn-group">
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download me-1"></i>Export
                    </button>
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-funnel me-1"></i>Filter
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th>Login Attempts</th>
                                <th>Auto-Deactivation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td><span class="activity-indicator activity-active me-2"></span>Active</td>
                                <td>2 hours ago</td>
                                <td>23</td>
                                <td>
                                    <select class="form-select form-select-sm w-auto">
                                        <option>3 days</option>
                                        <option>7 days</option>
                                        <option>14 days</option>
                                        <option>30 days</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td><span class="activity-indicator activity-inactive me-2"></span>Inactive</td>
                                <td>5 days ago</td>
                                <td>12</td>
                                <td>
                                    <select class="form-select form-select-sm w-auto">
                                        <option>3 days</option>
                                        <option>7 days</option>
                                        <option>14 days</option>
                                        <option>30 days</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-success">Activate</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Auto-Deactivation Settings</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Default Inactivity Period</label>
                    <select class="form-select w-auto">
                        <option>3 days</option>
                        <option>7 days</option>
                        <option>14 days</option>
                        <option>30 days</option>
                    </select>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="autoDeactivate" checked>
                    <label class="form-check-label" for="autoDeactivate">
                        Enable Automatic Deactivation
                    </label>
                </div>
                <button class="btn btn-primary">Save Settings</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        darkModeToggle.addEventListener('change', () => {
            document.documentElement.setAttribute('data-bs-theme', 
                darkModeToggle.checked ? 'dark' : 'light'
            );
        });

        // Sidebar toggle
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');
        
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });

        // Navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                e.target.classList.add('active');
            });
        });
    </script>
</body>
</html>

