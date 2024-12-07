<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../includes/pagenavbar.php'; ?>


    <div class="container my-5">
        <h1>Help and Support</h1>
        <p>Find answers to frequently asked questions or contact our support team.</p>
 <!-- Help Illustration -->
 <div class="text-center">
            <img src="../assets/help.jpg" alt="Help Illustration" class="img-fluid rounded mt-4" style="max-width: 60%; height: auto;">
        </div>
        <!-- FAQ Section -->
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        How to use the Income Tracker?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Navigate to the Income Tracker page and add your income sources.
                    </div>
                </div>
            </div>
            <!-- Add more FAQs -->
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/script.js" defer></script>
</html>

