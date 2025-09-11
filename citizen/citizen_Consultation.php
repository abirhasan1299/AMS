<!DOCTYPE html>
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

    <!-- Navigation Bar -->
    <?php include 'operation/navbar.php';?>
    <!-- Main Content Section -->
    <section class="main-content-container">
        <div class="container">
            <div class="info-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="page-heading">পরামর্শ বুক করুন</h1>
                <p class="lead text-muted mb-4" id="page-description">আপনার প্রয়োজন অনুযায়ী একজন পেশাদার আইনজীবীর সাথে সংযোগ করুন।</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="search-advocates-heading">আইনজীবী খুঁজুন</h3>
                        <form id="advocate-search-form">
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="specialization" class="form-label" id="specialization-label">বিশেষজ্ঞতা:</label>
                                    <select name="specialization" class="form-select" id="specialization">
                                        <option value="" id="select-specialization">বিশেষজ্ঞতা নির্বাচন করুন</option>
                                        <option value="family-law" id="opt-family-law">পারিবারিক আইন</option>
                                        <option value="criminal-law" id="opt-criminal-law">ফৌজদারি আইন</option>
                                        <option value="cyber-law" id="opt-cyber-law">সাইবার আইন</option>
                                        <option value="property-law" id="opt-property-law">সম্পত্তি আইন</option>
                                        <option value="corporate-law" id="opt-corporate-law">কর্পোরেট আইন</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="language" class="form-label" id="language">ভাষা:</label>
                                    <select name="language" class="form-select" id="language">
                                        <option value="" id="select-language">ভাষা নির্বাচন করুন</option>
                                        <option value="bengali" id="opt-bengali">বাংলা</option>
                                        <option value="english" id="opt-english">ইংরেজি</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="consultation-type" class="form-label" id="consultation-type-label">পরামর্শের ধরন:</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="" id="select-consultation-type">পরামর্শের ধরন নির্বাচন করুন</option>
                                        <option value="video" id="opt-video">ভিডিও কল</option>
                                        <option value="phone" id="opt-phone">ফোন কল</option>
                                        <option value="in-person" id="opt-in-person">সরাসরি</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label" id="date-label">Rank</label>
                                    <select class="form-control" id="post" name="post">
                                        <option disabled selected>CHOOSE RANK</option>
                                        <?php
                                        include '../configuration/config.php';
                                        $sql = "SELECT distinct(post) FROM profile";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $row['post']; ?>"><?php echo strtoupper($row['post']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary-custom" id="search-button"><i data-lucide="search" class="me-2"></i> Search Lawyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="advocate-results-section">
                <div class="col-12">
                    <h3 class="section-header" id="available-advocates-heading">উপলব্ধ আইনজীবী</h3>
                </div>

                <!-- Advocate Cards will be dynamically loaded here -->


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#search-button').on("click", function (){
            SearchAdvocate();
        });
    });
    function SearchAdvocate() {
        var specialization = $('#specialization').val();
        var type = $('#type').val();
        var lang = $('#language').val();
        var post =  $('#post').val();
        $.ajax({
            url: "operation/ajax_show_advocate.php",
            type: "POST",
            data: {
                specialization: specialization,
                type: type,
                lang: lang,
                post: post
            },
            success: function(data) {
                $("#advocate-results-section").html(data);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }
</script>
</body>
</html>
