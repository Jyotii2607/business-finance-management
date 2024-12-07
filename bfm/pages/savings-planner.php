<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savings Planner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body> 
    <?php include '../includes/pagenavbar.php'; ?>

    <div class="container my-5">
        <h1>Savings Planner</h1>
        <p class="lead">Track and achieve your savings goals.</p>

        <!-- Savings Goal Form -->
        <form class="my-4">
            <div class="mb-3">
                <label for="goalName" class="form-label">Goal Name</label>
                <input type="text" class="form-control" id="goalName" placeholder="e.g., Vacation, Car">
            </div>
            <div class="mb-3">
                <label for="goalAmount" class="form-label">Target Amount</label>
                <input type="number" class="form-control" id="goalAmount" placeholder="e.g., 5000">
            </div>
            <div class="mb-3">
                <label for="savedAmount" class="form-label">Amount Saved</label>
                <input type="number" class="form-control" id="savedAmount" placeholder="e.g., 1500">
            </div>
            <button type="submit" class="btn btn-success">Save Goal</button>
        </form>

        <!-- Savings Goals Table -->
        <h3 class="mt-5">Savings Goals</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Goal</th>
                    <th>Target</th>
                    <th>Saved</th>
                    <th>Remaining</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vacation</td>
                    <td>&#x20B95000</td>
                    <td>&#x20B91500</td>
                    <td>&#x20B93500</td>
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
