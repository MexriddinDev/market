<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .user-activity-card {
            border-radius: 15px;
            transition: transform 0.2s;
        }
        .user-activity-card:hover {
            transform: translateY(-5px);
        }
        .status-badge {
            padding: 0.5em 1em;
            border-radius: 20px;
        }
        .form-switch .form-check-input {
            width: 3em;
        }
        .modal-content {
            border-radius: 15px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">User Management</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="bi bi-person-plus"></i> Add New User
            </button>
        </div>

        <!-- Activity Overview Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card user-activity-card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h2 class="mb-0">247</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card user-activity-card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Active Users</h5>
                        <h2 class="mb-0">186</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card user-activity-card bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title">Inactive Users</h5>
                        <h2 class="mb-0">61</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card user-activity-card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">New Today</h5>
                        <h2 class="mb-0">12</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Last Active</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#001</td>
                                <td>john_doe</td>
                                <td><span class="badge bg-primary">Admin</span></td>
                                <td>2 minutes ago</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-key"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- More user rows would be dynamically added here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addUserForm">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select">
                                    <option>User</option>
                                    <option>Admin</option>
                                    <option>Moderator</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Add User</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editUserForm">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="john_doe" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select">
                                    <option>User</option>
                                    <option selected>Admin</option>
                                    <option>Moderator</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Active</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Activity Timeout (days)</label>
                                <input type="number" class="form-control" value="30">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Add your JavaScript code here for handling user management operations
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize tooltips
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })

                // Add event listeners for form submissions
                document.getElementById('addUserForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Add user logic here
                });

                document.getElementById('editUserForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Edit user logic here
                });
            });
        </script>
    </div>
</body>
</html>

