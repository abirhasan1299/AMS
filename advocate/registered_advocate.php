<!DOCTYPE html>
<?php
include '../configuration/security.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Advocate List - Advocate & Criminology Management System - আইনপ্রহরী</title>

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
            min-height: 100vh; /* Ensure full viewport height */
            display: flex;
            flex-direction: column;
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

        .list-container {
            flex-grow: 1; /* Allows content to push footer down */
            padding: 3rem 0;
            background-color: var(--bg-blue-50-custom);
        }

        .section-header {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        /* Advocate Card Styling */
        .advocate-card-link {
            text-decoration: none;
            color: inherit;
            display: block;
            height: 100%;
        }

        .advocate-card {
            background-color: var(--bg-white);
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 1.5rem; /* Margin between cards */
        }

        .advocate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .advocate-card .profile-icon {
            font-size: 3rem;
            color: var(--accent-blue);
            margin-bottom: 1rem;
        }

        .advocate-card h5 {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }

        .advocate-card p {
            font-size: 0.9rem;
            color: var(--text-medium);
            margin-bottom: 0.25rem;
        }

        .advocate-card .badge {
            margin-top: 0.5rem;
            font-size: 0.75rem;
            padding: 0.3em 0.6em;
        }

        /* Footer specific styling */
        footer {
            margin-top: auto; /* Pushes footer to the bottom */
        }
        footer a {
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: white !important;
        }

        .bg-blue-50-custom {
            background-color: var(--light-blue);
        }
        .bg-gray-900-custom {
            background-color: var(--bg-dark);
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <?php include 'digging/navbar.php'; ?>

    <!-- Registered Advocate List Section -->
    <section class="list-container">
        <div class="container">
            <h2 class="section-header text-center mb-4" id="advocate-list-heading">নিবন্ধিত অ্যাডভোকেট তালিকা</h2>
            <p class="text-muted text-center mb-5" id="advocate-list-tagline">আমাদের প্ল্যাটফর্মে নিবন্ধিত অ্যাডভোকেটদের তালিকা ব্রাউজ করুন এবং তাদের বিস্তারিত তথ্য দেখুন।</p>

            <div class="row g-4" id="advocate-cards-container">
                <?php
                include '../configuration/config.php';
                $sql = "SELECT users.id,profile.name,profile.post,profile.contact,profile.email,profile.img_name,profile.address,profile.specialization,profile.language FROM users INNER JOIN profile ON users.id=profile.user_id WHERE users.role='advocate'";
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="advocate-card-link">
                        <div class="advocate-card">
                            <img class="rounded-circle" alt="Profile" width="150" height="150" src="../uploads/profile/<?php echo $row['img_name'];?>">
                            <h5><?php echo $row['name'];?></h5>
                            <p>Rank: <?php echo $row['post'];?></p>
                            <p>Address: <?php echo $row['address'];?></p>
                            <p>Contact:<?php echo $row['contact'];?> </p>
                            <span class="badge bg-primary">
                                <?php echo strtoupper($row['specialization']);?>
                            </span>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
<!--
            <div class="text-center mt-5">
                <a href="advocate-dashboard.php" class="btn btn-primary-custom" id="back-to-dashboard-button">
                    <i data-lucide="arrow-left" class="me-2"></i> ড্যাশবোর্ডে ফিরে যান
                </a>
            </div> -->
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
