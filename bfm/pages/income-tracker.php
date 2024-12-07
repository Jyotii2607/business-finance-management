
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../includes/pagenavbar.php'; ?>


    <div class="container my-5">
        <h1>Income Tracker</h1>
        <p class="lead">Keep track of your income from various sources.</p>
        
        <!-- Income Form -->
        <form class="my-4">
            <div class="mb-3">
                <label for="incomeSource" class="form-label">Income Source</label>
                <input type="text" class="form-control" id="incomeSource" placeholder="e.g., Salary, Freelance">
            </div>
            <div class="mb-3">
                <label for="incomeAmount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="incomeAmount" placeholder="e.g., 5000">
            </div>
            <div class="mb-3">
                <label for="incomeDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="incomeDate">
            </div>
            <button type="submit" class="btn btn-success">Add Income</button>
        </form>

        <!-- Income Table -->
        <h3 class="mt-5">Income History</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Source</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salary</td>
                    <td>&#x20B9 3000</td>
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
