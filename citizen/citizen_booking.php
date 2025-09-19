<!DOCTYPE html>
<?php
ob_start();
include '../configuration/config.php';
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Consultation - Advocate & Criminology Management System - আইনপ্রহরী</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-blue: #1a202c; /* blue-900 equivalent */
            --secondary-blue: #2c5282; /* blue-700 equivalent */
            --accent-blue: #3182ce; /* blue-600 equivalent */
            --light-blue: #ebf8ff; /* blue-50 equivalent */
            --lighter-blue: #e0f2fe; /* blue-100 equivalent */
            --text-dark: #2d3748; /* gray-800 equivalent */
            --text-medium: #4a5568; /* gray-700 equivalent */
            --text-light: #718096; /* gray-600 equivalent */
            --bg-light: #f7fafc; /* gray-50 equivalent */
            --bg-white: #ffffff;
            --bg-dark: #1a202c; /* gray-900 equivalent */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            padding-top: 76px; /* Adjust based on navbar height */
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            color: var(--primary-blue) !important;
            font-weight: 800;
            font-size: 1.75rem;
            border-radius: 0.5rem;
            padding: 0.5rem 0.75rem;
            transition: background-color 0.3s ease;
        }
        .navbar-brand:hover {
            background-color: var(--light-blue);
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: var(--accent-blue) !important;
        }

        .btn-primary-custom {
            background-color: var(--accent-blue);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 9999px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background-color: #2b6cb0;
            transform: translateY(-2px);
            color: white;
        }

        .btn-secondary-outline-custom {
            background-color: transparent;
            color: var(--text-medium);
            border: 1px solid var(--text-light);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        .btn-secondary-outline-custom:hover {
            background-color: var(--light-blue);
            color: var(--accent-blue);
            border-color: var(--accent-blue);
        }

        .main-content-container {
            padding: 3rem 0;
            background-color: var(--bg-blue-50-custom);
        }

        .info-card {
            background-color: var(--bg-white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            margin-bottom: 2rem;
        }
        .section-header {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .text-primary-custom {
            color: var(--accent-blue) !important;
        }
        .bg-gray-900-custom {
            background-color: var(--bg-dark);
        }

        /* Footer specific styling */
        footer a {
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: white !important;
        }

        .advocate-card {
            background-color: var(--bg-white);
            border-radius: 0.75rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .advocate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .advocate-card h5 {
            color: var(--primary-blue);
            font-weight: 600;
        }
        .advocate-card .badge {
            font-size: 0.8rem;
            padding: 0.4em 0.7em;
            border-radius: 0.3rem;
        }
        .advocate-card .btn-book {
            background-color: var(--accent-blue);
            color: white;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }
        .advocate-card .btn-book:hover {
            background-color: #2b6cb0;
        }
    </style>
</head>
<body>
<?php

include '../configuration/config.php';

$decoded = hex2bin($_GET['ref']);
$sql = "SELECT * 
        FROM profile 
        INNER JOIN users ON users.id = profile.user_id 
        WHERE users.unique_code = '$decoded'";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
while ($row = mysqli_fetch_assoc($result)) {
?>
<!-- Navigation Bar -->
<?php include 'operation/navbar.php';?>
<!-- Main Content Section -->

<section id="profile-info" class="container my-4">
    <div class="row">
        <!-- Profile Card -->
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body d-flex">
                    <!-- Profile Image -->
                    <img src="../uploads/profile/<?php echo $row['img_name'];?>" id="advocate-img" class="rounded-circle me-4" width="120" height="120" alt="Advocate">

                    <!-- Profile Info -->
                    <div>
                        <h4 id="advocate-name"><?php echo $row['name'];?></h4>
                        <p><strong>Post:</strong> <span id="advocate-post"><?php echo $row['post'];?></span></p>
                        <p><strong>Specialization:</strong> <span id="advocate-specialization"><?php echo strtoupper($row['specialization']);?></span></p>
                        <p><strong>Language:</strong> <span id="advocate-language"><?php echo $row['language'];?></span></p>
                        <p><strong>Contact:</strong> <span id="advocate-contact"><?php echo $row['contact'];?></span></p>
                        <p><strong>Email:</strong> <span id="advocate-email"><?php echo $row['email'];?></span></p>
                    </div>
                </div>
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 style="text-align: center;margin:10px;">Upcoming Consultation Availability</h4>
                    <ul class="mt-5">
                        <?php
                        $s = "SELECT * FROM event WHERE user_id = {$row['id']}";
                        $res= mysqli_query($conn, $s);
                        while ($r = mysqli_fetch_assoc($res)) {
                            echo "<li>Date: ".$r['date']." | Time: ".$r['time']." | Venue: ".$r['venue']."</li><hr>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Payment Card -->
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body text-center">
                    <h5 class="mb-3">Consultation Fee</h5>
                    <h2 class="text-success mb-4" id="advocate-fee">৳ <?php echo $row['fees'];?></h2>


                    <!-- Payment Options -->


                    <a role="button" href="checkout.php?price=<?php echo $row['fees'];?>&trans_id=<?php
                    echo  "TXN".strtoupper(bin2hex(random_bytes(4)));
                    ?>&client_id=<?php echo $_SESSION['id'];?>&advocate_id=<?php echo $row['id'];?>&date=<?php echo date('d-m-Y');?>" class="btn btn-primary w-100 mb-2" id="pay-now-btn">
                        <i class="bi bi-credit-card me-2"></i>Confirm & Pay Now
                    </a>

                    <small class="text-muted d-block mt-2">Secure Payment Gateway</small>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<!-- Bootstrap JS CDN (Bundle with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
<?php
ob_end_flush();
?>