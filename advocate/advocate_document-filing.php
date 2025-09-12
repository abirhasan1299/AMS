<!DOCTYPE html>
<?php
include '../configuration/security.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Filing - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .document-item {
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
        .document-item .icon {
            color: var(--accent-blue);
            margin-right: 1rem;
        }
        .document-item .content {
            flex-grow: 1;
        }
        .document-item .content h6 {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.25rem;
        }
        .document-item .content p {
            font-size: 0.9rem;
            color: var(--text-medium);
            margin-bottom: 0;
        }
        .document-item .actions {
            margin-top: 0.5rem;
            width: 100%;
            text-align: right;
        }
        @media (min-width: 768px) {
            .document-item .actions {
                margin-top: 0;
                width: auto;
            }
        }
    </style>
</head>
<body>
<?php include 'digging/navbar.php'; ?>

    <!-- Main Content Section -->
    <section class="main-content-container">
        <?php include 'digging/add-file.php' ; ?>
        <div class="container">
            <div class="info-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="page-heading">নথি জমা</h1>
                <p class="lead text-muted mb-4" id="page-description">আপনার মামলার জন্য আইনি নথি আপলোড, পরিচালনা এবং জমা দিন।</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="upload-document-heading">নথি আপলোড করুন</h3>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="case-id-select" class="form-label" id="case-id-label">মামলা আইডি নির্বাচন করুন:</label>
                                <select class="form-select" name="case_id" id="case-id-select" required>
                                    <option selected disabled>Choose Case</option>
                                    <?php
                                    include '../configuration/config.php';
                                    $sql = "SELECT * FROM cases WHERE user_id={$_SESSION['id']}";
                                    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['id'] ?>" id="select-case-id">
                                        <?php echo $row['title'] ?> - <?php echo $row['client_name'] ?>
                                    </option>

                                    <?php } ?>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="document-type" class="form-label" id="document-type-label">নথির ধরন:</label>
                                <select class="form-select" name="case_type" id="document-type" required>
                                    <option value="" id="select-document-type">নথির ধরন নির্বাচন করুন</option>
                                    <option value="petition" >পিটিশন</option>
                                    <option value="affidavit" >হলফনামা</option>
                                    <option value="evidence">প্রমাণ</option>
                                    <option value="legal-notice">আইনি নোটিশ</option>
                                    <option value="other" >অন্যান্য</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="document-file" class="form-label" id="document-file-label">নথি ফাইল:</label>
                                <input type="file" name="file" class="form-control" id="document-file" accept=".pdf,.doc,.docx,.jpg,.png" required>
                                <small class="form-text text-muted" id="file-format-hint">অনুমোদিত ফরম্যাট: PDF, DOCX, JPG, PNG।</small>
                            </div>
                            <div class="mb-4">
                                <label for="document-description" class="form-label" id="document-description-label">সংক্ষিপ্ত বিবরণ (ঐচ্ছিক):</label>
                                <textarea name="des" class="form-control" id="document-description" rows="3" placeholder="নথি সম্পর্কে একটি সংক্ষিপ্ত বিবরণ দিন"></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-primary-custom" id="upload-button"><i data-lucide="upload" class="me-2"></i> নথি আপলোড করুন</button>
                            </div>
                        </form>
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
