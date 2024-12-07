<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Management - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <?php include './includes/navbar.php'; ?>


    <!-- Hero Section -->
    <div class="container text-center my-5">
        <h1 class="display-4">Welcome to Finance Manager</h1>
        <p class="lead">Your ultimate solution for tracking income, managing expenses, and planning budgets effectively.</p>
        <img src="assets/dashboard.jpg" alt="Dashboard Illustration" class="img-fluid rounded mt-4" style="max-width: 80%; height: auto;">
        <a href="pages/dashboard.php" class="btn btn-primary btn-lg mt-3">Go to Dashboard</a>
    </div>
    <!-- Features Section -->
    <div class="container my-5">
    <div class="row">
        <!-- Income Tracker Card -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/income.jpg" class="card-img-top" alt="Income Tracker">
                <div class="card-body">
                    <h5 class="card-title">Income Tracker</h5>
                    <p>Keep track of your income from all sources.</p>
                    <a href="pages/income-tracker.php" class="btn btn-success">Explore</a>
                </div>
            </div>
        </div>

        <!-- Other Feature Cards -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/expense.jpg" class="card-img-top" alt="Expense Tracker">
                <div class="card-body">
                    <h5 class="card-title">Expense Tracker</h5>
                    <p>Manage and categorize your expenses effectively.</p>
                    <a href="pages/expense-tracker.php" class="btn btn-danger">Explore</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/budget.jpg" class="card-img-top" alt="Budget Planner">
                <div class="card-body">
                    <h5 class="card-title">Budget Planner</h5>
                    <p>Set and achieve your financial goals.</p>
                    <a href="pages/budget-planner.php" class="btn btn-warning">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/script.js" defer></script>
</html>
