<!DOCTYPE html>
<?php include '../configuration/security.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .content-card {
            background-color: var(--bg-white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
        }

        .form-control {
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
        }

        .btn-action {
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
        }

        .section-header {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .sub-header {
            color: var(--text-medium);
            margin-bottom: 1.5rem;
        }

        .text-primary-custom {
            color: var(--accent-blue) !important;
        }
        .text-primary-custom-icon {
            color: var(--primary-blue) !important;
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
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'digging/navbar.php';?>
    <!-- End Navigation Bar -->

    <!-- Main Content -->
    <main class="dashboard-container">
        <div class="container">
            <div class="content-card">
                <?php include 'digging/add-user.php'; ?>
                <h2 class="section-header" id="header-add-new-user">Add New User</h2>
                <p class="sub-header" id="sub-header-desc">Fill out the form below to create a new user account.</p>

                <form action="<?php $_SERVER['PHP_SELF'] ;?>" method="POST" autocomplete="off">
                    <div class="mb-3">
                        <label for="username" class="form-label" id="label-username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" id="label-password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label" id="label-role">Role</label>
                        <select class="form-select" name="role" id="role-select">
                            <option value="admin">Admin</option>
                            <option value="advocate">Advocate</option>
                            <option value="citizen">Citizen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" >Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label" >Phone</label>
                        <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" name="submit" class="btn btn-primary-custom btn-action" id="text-create-user">Create User</button>
                    </div>
                </form>
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
