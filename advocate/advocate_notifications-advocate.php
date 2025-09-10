<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications & Alerts - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .notification-item {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .notification-item.unread {
            background-color: var(--lighter-blue);
            border-left: 5px solid var(--accent-blue);
        }
        .notification-item .icon {
            color: var(--accent-blue);
            margin-right: 1rem;
        }
        .notification-item .content {
            flex-grow: 1;
        }
        .notification-item .content h6 {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.25rem;
        }
        .notification-item .content p {
            font-size: 0.9rem;
            color: var(--text-medium);
            margin-bottom: 0;
        }
        .notification-item .timestamp {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-left: 1rem;
            white-space: nowrap;
        }
        .notification-actions {
            margin-top: 0.5rem;
            width: 100%;
            text-align: right;
        }
        @media (min-width: 768px) {
            .notification-item .actions {
                margin-top: 0;
                width: auto;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <i data-lucide="gavel" class="me-2 text-primary-custom-icon"></i>
                <span id="app-name">আইনপ্রহরী</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <button class="btn btn-outline-secondary d-flex align-items-center" id="back-to-dashboard">
                            <i data-lucide="arrow-left" class="me-2"></i> <span id="back-button-text">ড্যাশবোর্ডে ফিরে যান</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feature.html" id="nav-features">বৈশিষ্ট্যসমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roles.html" id="nav-roles">ভূমিকা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" id="nav-contact">যোগাযোগ</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-primary d-flex align-items-center" href="profile.html" id="nav-profile">
                            <i data-lucide="user" class="me-2"></i> <span id="user-display-name">ব্যবহারকারী</span>
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary-custom d-flex align-items-center" href="index.html" id="nav-logout">
                            <i data-lucide="log-out" class="me-2"></i> লগআউট
                        </a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <div id="toggle"></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        function  loadGoogleTranslate(){
            new google.translate.TranslateElement("toggle");
        }
    </script>
    <!-- Main Content Section -->
    <section class="main-content-container">
        <div class="container">
            <div class="info-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="page-heading">বিজ্ঞপ্তি ও সতর্কতা</h1>
                <p class="lead text-muted mb-4" id="page-description">আপনার মামলা, অ্যাপয়েন্টমেন্ট এবং সিস্টেম আপডেট সম্পর্কিত গুরুত্বপূর্ণ বিজ্ঞপ্তিগুলি দেখুন।</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="notification-center-heading">বিজ্ঞপ্তি কেন্দ্র</h3>
                        <div id="notification-list">
                            <?php
                            include '../configuration/config.php';
                            $sql = "SELECT * FROM notification WHERE user_id={$_SESSION['id']}";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="notification-item unread" id="notification-1">
                                <i data-lucide="bell" class="icon"></i>
                                <div class="content">
                                    <h6 id="notification-title-1">
                                        <?php echo $row['title']; ?>
                                    </h6>
                                    <p id="notification-text-1">
                                        <?php echo $row['des']; ?>
                                    </p>
                                </div>
                                <span class="timestamp" id="notification-time-1">
                                    <?php echo $row['datetime']; ?>
                                </span>

                            </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Bootstrap JS CDN (Bundle with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
