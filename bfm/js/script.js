// Initialize a modal (Bootstrap)
document.addEventListener("DOMContentLoaded", () => {
    const modalElement = document.getElementById("exampleModal");
    if (modalElement) {
        const modal = new bootstrap.Modal(modalElement);
        document.getElementById("showModalButton").addEventListener("click", () => {
            modal.show();
        });
    }
});

// Chart.js Example: Line Chart
const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
            {
                label: "Income",
                data: [1200, 1900, 3000, 5000, 2300, 4000],
                borderColor: "#007bff",
                tension: 0.4,
            },
            {
                label: "Expenses",
                data: [1000, 1500, 2000, 4500, 2000, 3500],
                borderColor: "#dc3545",
                tension: 0.4,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
    },
});

// Form Validation Example
document.querySelectorAll("form").forEach((form) => {
    form.addEventListener("submit", (e) => {
        const inputs = form.querySelectorAll("input");
        let isValid = true;

        inputs.forEach((input) => {
            if (input.value.trim() === "") {
                input.classList.add("is-invalid");
                isValid = false;
            } else {
                input.classList.remove("is-invalid");
            }
        });

        if (!isValid) {
            e.preventDefault();
            alert("Please fill all fields!");
        }
    });
});
