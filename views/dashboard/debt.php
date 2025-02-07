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
        Total Debt: $<span id="total-debt">0.00</span>
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
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="debt-list">
                <!-- Bu qismda qarzdorlar ro'yxati chiqadi -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Misol ma'lumotlar
    const debts = [
        { id: 1, full_name: "John Doe", phone_number: "123-456-7890", amount: 150.00, item: "Laptop", issue_date: "2025-01-15", due_date: "2025-02-10", payment_status: "Unpaid" },
        { id: 2, full_name: "Jane Smith", phone_number: "987-654-3210", amount: 200.50, item: "Tablet", issue_date: "2025-01-20", due_date: "2025-03-05", payment_status: "Paid" }
    ];

    // Jadvalni to'ldirish va umumiy qarzni hisoblash
    function renderDebtList() {
        let debtList = document.getElementById('debt-list');
        let totalDebt = 0;
        debtList.innerHTML = '';

        debts.sort((a, b) => new Date(a.due_date) - new Date(b.due_date));

        debts.forEach((debt, index) => {
            totalDebt += parseFloat(debt.amount);
            debtList.innerHTML += `
          <tr>
            <td>${index + 1}</td>
            <td>${debt.full_name}</td>
            <td>${debt.phone_number}</td>
            <td>$${debt.amount.toFixed(2)}</td>
            <td>${debt.item}</td>
            <td>${debt.issue_date}</td>
            <td>${debt.due_date}</td>
            <td>${debt.payment_status}</td>
            <td>
                <button class="icon-button" title="Edit"><img src="https://img.icons8.com/ios-glyphs/20/000000/edit.png"/></button>
                <button class="icon-button" title="Delete"><img src="https://img.icons8.com/ios-glyphs/20/000000/delete.png"/></button>
            </td>
          </tr>
        `;
        });

        document.getElementById('total-debt').textContent = totalDebt.toFixed(2);
    }

    // Qarzni to'langan deb belgilash
    function markAsPaid(index) {
        debts[index].payment_status = 'Paid';
        renderDebtList();
    }

    // Qidiruv funksiyasi
    document.getElementById('search-debt').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const filteredDebts = debts.filter(debt =>
            debt.full_name.toLowerCase().includes(searchValue) ||
            debt.phone_number.includes(searchValue)
        );
        renderFilteredList(filteredDebts);
    });

    function renderFilteredList(filteredDebts) {
