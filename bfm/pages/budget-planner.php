<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Planner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../includes/pagenavbar.php'; ?>

     
    <div class="container my-5">
        <h1>Budget Planner</h1>
        <p class="lead">Plan and set your monthly or yearly budgets.</p>

        <!-- Budget Form -->
        <form class="my-4">
            <div class="mb-3">
                <label for="budgetCategory" class="form-label">Budget Category</label>
                <input type="text" class="form-control" id="budgetCategory" placeholder="e.g., Groceries, Travel">
            </div>
            <div class="mb-3">
                <label for="budgetAmount" class="form-label">Budget Amount</label>
                <input type="number" class="form-control" id="budgetAmount" placeholder="e.g., 500">
            </div>
            <button type="submit" class="btn btn-warning">Set Budget</button>
        </form>

        <!-- Budget Table -->
        <h3 class="mt-5">Budget Overview</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Budget</th>
                    <th>Spent</th>
                    <th>Remaining</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Groceries</td>
                    <td>&#x20B9 500</td>
                    
                    <td>&#x20B9 350</td>
                    <td>&#x20B9 150</td>
                </tr>
                <!-- Add more rows dynamically -->
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/script.js" defer></script>
</html>
