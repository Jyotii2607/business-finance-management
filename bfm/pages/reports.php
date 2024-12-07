<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../includes/pagenavbar.php'; ?>



    <div class="container my-5">
        <h1>Reports</h1>
        <p class="lead">Generate and view detailed financial reports.</p>

        <!-- Filter Options -->
        <form class="my-4">
            <div class="mb-3">
                <label for="reportType" class="form-label">Report Type</label>
                <select class="form-select" id="reportType">
                    <option value="monthly">Monthly Report</option>
                    <option value="quarterly">Quarterly Report</option>
                    <option value="yearly">Yearly Report</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Generate Report</button>
        </form>

        <!-- Chart Section -->
        <h3 class="mt-5">Visualization</h3>
        <canvas id="reportsChart" width="400" height="200"></canvas>
    </div>
    <canvas id="incomeExpenseChart" width="400" height="200"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('incomeExpenseChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Income', 'Expenses'],
        datasets: [{
            label: 'Financial Overview',
            data: [5000, 3000], // Fetch these values from PHP dynamically
            backgroundColor: ['#4CAF50', '#F44336']
        }]
    }
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('reportsChart').getContext('2d');
        const reportsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Income',
                    data: [2000, 2500, 2100, 2300, 2200],
                    borderColor: 'green',
                    tension: 0.1
                }, {
                    label: 'Expense',
                    data: [1500, 1800, 1700, 2000, 1900],
                    borderColor: 'red',
                    tension: 0.1
                }]
            }
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/script.js" defer></script>
</html>
