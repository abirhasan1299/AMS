<!DOCTYPE html>
<?php
include '../configuration/security.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocate Dashboard - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .dashboard-container {
            padding: 3rem 0;
            background-color: var(--bg-blue-50-custom);
        }

        .welcome-card, .info-card, .analytics-card { /* Unified card styling */
            background-color: var(--bg-white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            margin-bottom: 2rem;
        }
        .info-card, .analytics-card {
            margin-bottom: 0; /* Adjust margin for grid layout */
        }

        .action-card {
            background-color: var(--bg-white);
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            text-decoration: none; /* Remove underline from links */
            color: inherit; /* Inherit text color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
        }
        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .action-card i {
            color: var(--accent-blue);
            margin-bottom: 0.75rem;
        }
        .action-card h5 {
            font-weight: 600;
            color: var(--primary-blue);
        }

        .section-header {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .list-group-item {
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            border: 1px solid #e2e8f0; /* gray-200 */
            background-color: var(--bg-white);
        }
        .list-group-item:last-child {
            margin-bottom: 0;
        }

        .text-primary-custom {
            color: var(--accent-blue) !important;
        }

        .bg-blue-50-custom {
            background-color: var(--light-blue);
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

    /* Analytics specific styling */
        .analytics-metric {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent-blue);
            line-height: 1;
        }
        .analytics-label {
            font-size: 0.9rem;
            color: var(--text-medium);
            font-weight: 500;
        }
 /* Sub-role panel specific styling */
        /* Make the entire panel clickable and add hover effects */
        .sub-role-link {
            text-decoration: none; /* Remove underline from the link */
            color: inherit; /* Inherit text color */
            display: block; /* Make the link fill the column */
            height: 100%; /* Ensure it takes full height for consistent clickable area */
        }

        .sub-role-panel {
            background-color: var(--bg-white);
            padding: 1.5rem; /* Reduced padding */
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            margin-bottom: 0; /* Remove margin-bottom as it's now on the col */
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Add transition for hover */
            height: 100%; /* Ensure the panel itself takes full height */
            display: flex; /* Use flexbox for vertical centering */
            flex-direction: column;
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
            text-align: center; /* Center text */
        }
        .sub-role-panel:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Stronger shadow on hover */
        }
        .sub-role-panel h4 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 0.5rem; /* Reduced margin */
        }
        .sub-role-panel p { /* Style for the description */
            font-size: 0.85rem; /* Smaller font size for description */
            color: var(--text-medium);
            margin-bottom: 0; /* Remove margin-bottom */
        }
        .sub-role-panel .list-unstyled { /* Ensure no features are displayed */
            display: none;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
   <?php include 'digging/navbar.php'; ?>
    <!-- Main Content -->
    <main class="dashboard-container">
        <div class="container">
            <!-- Admin Welcome and User Info -->
            <div class="welcome-card mb-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="section-header">Admin Dashboard</h2>
                        <p class="text-medium" id="welcome-message">
                            Welcome, <span id="admin-display-name">Admin User</span>. You have a full overview of the system.
                        </p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <p class="text-medium mb-0">Admin ID: <strong class="text-dark" id="user-id-value">ADM#<?php echo $_SESSION['unique_code']; ?></strong></p>
                    </div>
                </div>
            </div>

            <!-- Analytics and Summary Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="analytics-card text-center mb-md-0">
                        <i data-lucide="users" class="icon-size text-primary-custom"></i>
                        <div class="mt-3">
                            <?php include 'operation/total_user.php'; ?>
                            <div class="analytics-label">Total Users</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="analytics-card text-center mb-md-0">
                        <i data-lucide="briefcase" class="icon-size text-primary-custom"></i>
                        <div class="mt-3">
                            <?php include 'operation/total_case.php'; ?>
                            <div class="analytics-label">Total Cases</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="analytics-card text-center">
                        <i data-lucide="file-text" class="icon-size text-primary-custom"></i>
                        <div class="mt-3">
                            <?php include 'operation/pending_case.php'; ?>
                            <div class="analytics-label">Pending Cases</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Actions -->
            <div class="row mt-4">
                <div class="col-12">
                    <h4 class="section-header">Management Actions</h4>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="admin_add_new_user.php" class="action-card">
                        <i data-lucide="user-plus" class="icon-size"></i>
                        <h5 class="mt-3">Add New User</h5>
                        <p class="text-sm text-medium">Create a new user account.</p>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="admin_view_all_users.php" class="action-card">
                        <i data-lucide="list" class="icon-size"></i>
                        <h5 class="mt-3">View All Users</h5>
                        <p class="text-sm text-medium">See and manage all registered users.</p>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="admin_create_new_case.php" class="action-card">
                        <i data-lucide="folder-plus" class="icon-size"></i>
                        <h5 class="mt-3">Create New Case</h5>
                        <p class="text-sm text-medium">Start a new case file.</p>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="admin_view_all_cases.php" class="action-card">
                        <i data-lucide="folder-search" class="icon-size"></i>
                        <h5 class="mt-3">View All Cases</h5>
                        <p class="text-sm text-medium">Search and manage all case files.</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Content -->

     <!-- Footer -->
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


    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
