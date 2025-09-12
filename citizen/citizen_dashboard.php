<!DOCTYPE html>
<?php
include '../configuration/security.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Dashboard - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .welcome-card, .info-card { /* Combined for consistent styling */
            background-color: var(--bg-white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            margin-bottom: 2rem;
        }
        .info-card {
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

        /* Styles for the role filter buttons */
        .role-filter-buttons .btn {
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .role-filter-buttons .btn-outline-primary-custom {
            border-color: var(--accent-blue);
            color: var(--accent-blue);
            background-color: transparent;
        }
        .role-filter-buttons .btn-outline-primary-custom:hover,
        .role-filter-buttons .btn-outline-primary-custom.active {
            background-color: var(--accent-blue);
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <?php include 'operation/navbar.php'; ?>

    <!-- Citizen Dashboard Content Section -->
    <section class="dashboard-container">

        <div class="container">
            <div class="welcome-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="welcome-heading" data-i18n-key="welcomeHeading">Welcome, Citizen!</h1>
                <p class="lead text-muted mb-2" id="user-id-display" data-i18n-key="userIdDisplay">Your User ID: <span class="fw-bold text-primary-custom" id="user-id-value">CTZ#<?php echo $_SESSION['unique_code'];
                        ?></span></p>
                <p class="text-muted" id="dashboard-tagline" data-i18n-key="dashboardTagline">Here are all your tools for legal needs and crime reporting.</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_Consultation.php" class="action-card">
                        <i data-lucide="calendar-plus" class="icon-size"></i>
                        <h5 data-i18n-key="actionBookConsultation">Book Legal Consultations</h5>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_case-tracking.php" class="action-card">
                        <i data-lucide="clipboard-check" class="icon-size"></i>
                        <h5 data-i18n-key="actionTrackCases">Case & Report Status Tracking</h5>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_notification.php" class="action-card">
                        <i data-lucide="bell" class="icon-size"></i>
                        <h5 data-i18n-key="actionNotifications">Notifications & Alerts</h5>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_transaction.php" class="action-card">
                        <i data-lucide="clipboard-check" class="icon-size"></i>
                        <h5 data-i18n-key="actionTrackCases">Transactions</h5>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900-custom text-light py-4">
        <div class="container text-center text-md-start d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
                <p class="mb-0" data-i18n-key="footerCopyright">&copy; <span id="current-year"></span> AdvocatePro. All rights reserved.</p>
            </div>
            <div class="d-flex justify-content-center gap-4">
                <a href="#" class="text-light text-decoration-none hover-white" data-i18n-key="footerPrivacy">Privacy Policy</a>
                <a href="#" class="text-light text-decoration-none hover-white" data-i18n-key="footerTerms">Terms of Service</a>
                <a href="#" class="text-light text-decoration-none hover-white" data-i18n-key="footerSitemap">Sitemap</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS CDN (Bundle with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
