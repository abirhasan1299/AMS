<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaction Failed</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .fail-card {
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .fail-icon {
            font-size: 70px;
            color: #dc3545;
        }
        .countdown {
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card fail-card">
        <div class="card-body">
            <div class="fail-icon mb-3">
                ❌
            </div>
            <h2 class="text-danger">Transaction Failed!</h2>
            <p class="mt-3">You will be redirected to the home page in
                <span class="countdown" id="countdown">5</span> seconds.
            </p>

        </div>
    </div>
</div>

<script>
    let timeLeft = 5;
    const countdownEl = document.getElementById("countdown");

    const timer = setInterval(() => {
        timeLeft--;
        countdownEl.textContent = timeLeft;
        if (timeLeft <= 0) {
            clearInterval(timer);
            window.location.href = "citizen_dashboard.php"; // redirect to home
        }
    }, 1000);
</script>
</body>
</html>
