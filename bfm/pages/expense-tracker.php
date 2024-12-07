<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../includes/pagenavbar.php'; ?>


    <div class="container my-5">
        <h1>Expense Tracker</h1>
        <p class="lead">Record and analyze your expenses.</p>

        <!-- Expense Form -->
        <form class="my-4">
            <div class="mb-3">
                <label for="expenseCategory" class="form-label">Expense Category</label>
                <input type="text" class="form-control" id="expenseCategory" placeholder="e.g., Rent, Utilities">
            </div>
            <div class="mb-3">
                <label for="expenseAmount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="expenseAmount" placeholder="e.g., 1000">
            </div>
            <div class="mb-3">
                <label for="expenseDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="expenseDate">
            </div>
            <button type="submit" class="btn btn-danger">Add Expense</button>
        </form>

        <!-- Expense Table -->
        <h3 class="mt-5">Expense History</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rent</td>
                    <td>&#x20B9 1200</td>
                    <td>2024-12-01</td>
                    <td><button class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
                <!-- Add more rows dynamically -->
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/script.js" defer></script>
</html>
