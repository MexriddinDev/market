<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Monitoring - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <style>
        .activity-card {
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .activity-card:hover {
            transform: translateY(-5px);
        }
        .timeline-item {
            padding: 20px;
            border-left: 2px solid #0d6efd;
            position: relative;
            margin-left: 20px;
        }
        .timeline-item::before {
            content: '';
            width: 12px;
            height: 12px;
            background: #0d6efd;
            border-radius: 50%;
            position: absolute;
            left: -7px;
            top: 24px;
        }
        .chart-container {
            max-width: 100%;
            max-height: 400px; /* Grafiga maksimal balandlik belgilandi */
        }
    </style>
</head>
<body>
<div class="container-fluid py-4">
    <!-- Activity Overview Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card activity-card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Active Users</h5>
                    <h2 class="display-4" id="activeUsersCount">0</h2>
                    <p class="mb-0">Currently online</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card activity-card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Successful Logins</h5>
                    <h2 class="display-4" id="successfulLogins">0</h2>
                    <p class="mb-0">Last 24 hours</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card activity-card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">At Risk</h5>
                    <h2 class="display-4" id="atRiskCount">0</h2>
                    <p class="mb-0">Auto-deactivation pending</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card activity-card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Failed Attempts</h5>
                    <h2 class="display-4" id="failedAttempts">0</h2>
                    <p class="mb-0">Last 24 hours</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Activity Charts -->
    <div class="row mb-4">
        <div class="col-xl-8">
            <div class="card activity-card">
                <div class="card-body">
                    <h5 class="card-title">Activity Overview</h5>
                    <canvas id="activityChart" class="chart-container"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card activity-card">
                <div class="card-body">
                    <h5 class="card-title">User Distribution</h5>
                    <canvas id="userDistributionChart" class="chart-container"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Login History Table -->
    <div class="card activity-card mb-4">
        <div class="card-body">
            <h5 class="card-title">Login History</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Login Time</th>
                        <th>Status</th>
                        <th>IP Address</th>
                        <th>Device</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id="loginHistoryBody">
                    <!-- Populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Activity Timeline -->
    <div class="card activity-card mb-4">
        <div class="card-body">
            <h5 class="card-title">Activity Timeline</h5>
            <div class="timeline" id="activityTimeline">
                <!-- Populated by JavaScript -->
            </div>
        </div>
    </div>

    <!-- Auto-deactivation Settings -->
    <div class="card activity-card">
        <div class="card-body">
            <h5 class="card-title">Auto-deactivation Settings</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Inactivity Threshold (days)</label>
                        <input type="number" class="form-control" id="inactivityThreshold" min="1" value="30">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Warning Period (days)</label>
                        <input type="number" class="form-control" id="warningPeriod" min="1" value="7">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-3" onclick="saveSettings()">Save Settings</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Initialize charts
    const activityCtx = document.getElementById('activityChart').getContext('2d');
    const activityChart = new Chart(activityCtx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'User Activity',
                data: [65, 59, 80, 81, 56, 55, 40],
                borderColor: '#0d6efd',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    const distributionCtx = document.getElementById('userDistributionChart').getContext('2d');
    const distributionChart = new Chart(distributionCtx, {
        type: 'doughnut',
        data: {
            labels: ['Active', 'Inactive', 'At Risk'],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: ['#198754', '#dc3545', '#ffc107']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Function to save auto-deactivation settings
    function saveSettings() {
        const threshold = document.getElementById('inactivityThreshold').value;
        const warning = document.getElementById('warningPeriod').value;
        // Add API call here to save settings
        alert('Settings saved successfully!');
    }

    // Populate login history (example data)
    const loginHistory = document.getElementById('loginHistoryBody');
    const sampleLogin = `
            <tr>
                <td>John Doe</td>
                <td>2023-10-20 14:30:00</td>
                <td><span class="badge bg-success">Success</span></td>
                <td>192.168.1.1</td>
                <td>Chrome / Windows</td>
                <td>
                    <button class="btn btn-sm btn-info"><i class="bx bx-detail"></i></button>
                    <button class="btn btn-sm btn-warning"><i class="bx bx-block"></i></button>
                </td>
            </tr>
        `;
    loginHistory.innerHTML = sampleLogin.repeat(5);

    // Populate timeline (example data)
    const timeline = document.getElementById('activityTimeline');
    const sampleTimeline = `
            <div class="timeline-item">
                <h6>User Login</h6>
                <p class="text-muted mb-0">John Doe logged in successfully</p>
                <small class="text-muted">2 hours ago</small>
            </div>
        `;
    timeline.innerHTML = sampleTimeline.repeat(5);
</script>
</body>
</html>
