
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../includes/pagenavbar.php'; ?>

    <div class="container my-5">
        <h1>Dashboard</h1>
        <p class="lead">View your financial overview at a glance.</p>

        <!-- Analytics Section -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Income vs Expense</h5>
                        <canvas id="incomeExpenseChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Budget Utilization</h5>
                        <canvas id="budgetChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/script.js" defer></script>
    <script>
        // Example data for Income vs Expense chart
        const incomeExpenseCtx = document.getElementById('incomeExpenseChart').getContext('2d');
        const incomeExpenseChart = new Chart(incomeExpenseCtx, {
            type: 'bar',
            data: {
                labels: ['Income', 'Expense'],
                datasets: [{
                    label: 'Amount (USD)',
                    data: [2000, 1500],
                    backgroundColor: ['#28a745', '#dc3545'],
                }]
            }
        });

        // Example data for Budget chart
        const budgetCtx = document.getElementById('budgetChart').getContext('2d');
        const budgetChart = new Chart(budgetCtx, {
            type: 'doughnut',
            data: {
                labels: ['Used', 'Remaining'],
                datasets: [{
                    label: 'Budget Utilization',
                    data: [75, 25],
                    backgroundColor: ['#ffc107', '#f8f9fa'],
                }]
            }
        });
    </script>
</body>
</html>
