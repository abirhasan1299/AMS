<!DOCTYPE html>
<?php
include '../configuration/security.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

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

        .page-container {
            padding: 3rem 0;
            background-color: var(--bg-light);
        }

        .content-card {
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

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
        }

        .table {
            min-width: 900px; /* Ensure table doesn't shrink too much on smaller screens */
        }

        .table thead th {
            background-color: var(--lighter-blue);
            color: var(--primary-blue);
            font-weight: 600;
            border-bottom: 2px solid var(--accent-blue);
            padding: 1rem 0.75rem;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
        }
        .table tbody tr:hover {
            background-color: var(--light-blue);
        }

        .table tbody td {
            vertical-align: middle;
            padding: 0.75rem;
            border-top: 1px solid #e2e8f0;
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

        /* Search and Filter styling */
        .filter-section {
            background-color: var(--bg-white);
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            margin-bottom: 2rem;
        }
        .filter-section .form-control,
        .filter-section .form-select {
            border-radius: 0.5rem;
            border-color: #cbd5e0; /* gray-300 */
        }
        .filter-section .btn {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>

<!-- Navigation Bar (Copied from advocate-dashboard.php for consistency) -->
<?php include 'operation/navbar.php'; ?>

<!-- Current Cases Content Section -->
<section class="page-container">
    <div class="container">
        <div class="content-card text-center">
            <h1 class="display-5 fw-bold mb-3" id="page-heading">Transaction</h1>
            <p class="lead text-muted" id="page-tagline">Your all active transaction you can track here.</p>
        </div>


        <!-- Current Cases Table -->
        <div class="content-card">
            <h3 class="section-header" id="cases-table-heading">Transaction List</h3>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th scope="col" id="col-case-id">SL</th>
                        <th scope="col" id="col-case-name">Transaction ID</th>
                        <th scope="col" id="col-client-name">Advocate ID</th>
                        <th scope="col" id="col-case-status">Advocate Name</th>
                        <th scope="col" id="col-next-date">Amount</th>
                        <th scope="col" id="col-billed-amount">Date</th>
                    </tr>
                    </thead>
                    <tbody id="cases-table-body">
<?php
include '../configuration/config.php';
$sql = "SELECT * FROM transaction LEFT JOIN users ON transaction.advocate_id=users.id WHERE transaction.client_id={$_SESSION['id']} ORDER BY transaction.id DESC";
$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($res) > 0) {
    $count =1;
    while ($row = mysqli_fetch_assoc($res)) {
?>
        <tr>
            <td><?php echo $count;?></td>
            <td><?php echo $row['transaction_code'];?></td>
            <td><?php echo $row['unique_code'];?></td>
            <td><?php echo $row['name'];?></td>
            <td>$<?php echo $row['paid_fees'];?></td>
            <td><?php echo $row['date'];?></td>
        </tr>
<?php
        $count +=1;
    }
}else{
    echo '<tr style="text-align: center;font-weight: bolder;color:red;">No data found yet ! </tr>';
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Footer (Copied from advocate-dashboard.php for consistency) -->
<footer class="bg-gray-900-custom text-light py-4">
    <div class="container text-center text-md-start d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
            <p class="mb-0" id="footer-copyright">&copy; <span id="current-year"></span> আইনপ্রহরী. সর্বস্বত্ব সংরক্ষিত।</p>
        </div>
        <div class="d-flex justify-content-center gap-4">
            <a href="#" class="text-light text-decoration-none hover-white" id="footer-privacy">গোপনীয়তা নীতি</a>
            <a href="#" class="text-light text-decoration-none hover-white" id="footer-terms">পরিষেবার শর্তাবলী</a>
            <a href="#" class="text-light text-decoration-none hover-white" id="footer-sitemap">সাইটম্যাপ</a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS CDN (Bundle with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
