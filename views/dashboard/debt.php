<?php
require_once __DIR__ . '/../../Models/Debt.php';
$debtModel = new \Models\Debt();
$debts = $debtModel->getAllDebts();
$totalDebt = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debt Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .summary-box {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            color: #0d47a1;
        }

        h4 {
            color: #1565c0;
            font-weight: bold;
        }

        form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
        }

        table {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #1565c0;
            color: white;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        button {
            border-radius: 8px;
        }

        .btn-success {
            background-color: #43a047;
            border: none;
        }

        .btn-success:hover {
            background-color: #2e7d32;
        }

        .search-input {
            margin-bottom: 20px;
        }

        .icon-button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .icon-button:focus {
            outline: none;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <!-- Umumiy qarz summasi -->
    <div class="summary-box mb-4">
        Total Debt: $<span id="total-debt"><?php
            foreach($debts as $debt) {
                $totalDebt += floatval($debt['amount']);
            }
            echo number_format($totalDebt, 2);
            ?></span>
    </div>
</div>

<div class="row">
    <!-- Qarz qo'shish formasi -->
    <div class="col-md-4 mb-4">
        <h4>Add New Debt</h4>
        <form action="/dashboard/debt" method="POST">
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter full name" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter phone number" required>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" name="amount" id="amount" class="form-control" placeholder="Enter amount" required>
            </div>

            <div class="mb-3">
                <label for="item" class="form-label">Item</label>
                <input type="text" name="item" id="item" class="form-control" placeholder="What was borrowed" required>
            </div>

            <div class="mb-3">
                <label for="issue_date" class="form-label">Issue Date</label>
                <input type="date" name="issue_date" id="issue_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" name="due_date" id="due_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="payment_status" class="form-label">Payment Status</label>
                <select name="payment_status" id="payment_status" class="form-select">
                    <option value="Unpaid">Unpaid</option>
                    <option value="Paid">Paid</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Add Debt</button>
        </form>
    </div>

    <!-- Qarzdorlar ro'yxati -->
    <div class="col-md-8">
        <h4>Debt List</h4>
        <input type="text" id="search-debt" class="form-control search-input" placeholder="Search by name or phone number">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Amount</th>
                <th>Item</th>
                <th>Issue Date</th>
                <th>Due Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody id="debt-list">
            <?php foreach($debts as $index => $debt): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($debt['full_name']) ?></td>
                    <td><?= htmlspecialchars($debt['phone_number']) ?></td>
                    <td>$<?= number_format($debt['amount'], 2) ?></td>
                    <td><?= htmlspecialchars($debt['item']) ?></td>
                    <td><?= htmlspecialchars($debt['issue_date']) ?></td>
                    <td><?= htmlspecialchars($debt['due_date']) ?></td>
                    <td><?= htmlspecialchars($debt['payment_status']) ?></td>
                    <td>
                        <button class="icon-button" onclick="markAsPaid(<?= $debt['id'] ?>)" title="Mark as Paid">
                            <img src="https://img.icons8.com/ios-glyphs/20/000000/checkmark.png"/>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<script>
    function markAsPaid(debtId) {
        fetch(`/api/debts/${debtId}/mark-paid`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert('Error updating debt status');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error updating debt status');
            });
    }

    document.getElementById('search-debt').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#debt-list tr');

        rows.forEach(row => {
            const name = row.cells[1].textContent.toLowerCase();
            const phone = row.cells[2].textContent.toLowerCase();

            if (name.includes(searchValue) || phone.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
