<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Calendar - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 0.5rem;
            text-align: center;
        }
        .calendar-header {
            font-weight: 600;
            padding: 0.75rem 0;
            background-color: var(--lighter-blue);
            border-radius: 0.5rem;
        }
        .calendar-day {
            padding: 0.75rem 0;
            border-radius: 0.5rem;
            background-color: var(--bg-white);
            border: 1px solid #e2e8f0;
            cursor: pointer;
            transition: background-color 0.2s ease;
            position: relative;
        }
        .calendar-day:hover {
            background-color: var(--light-blue);
        }
        .calendar-day.has-event {
            background-color: var(--accent-blue);
            color: white;
            font-weight: 600;
        }
        .calendar-day.has-event:hover {
            background-color: #2b6cb0;
        }
        .calendar-day.current-day {
            border: 2px solid var(--accent-blue);
        }
        .event-indicator {
            position: absolute;
            bottom: 0.25rem;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 6px;
            background-color: #f6ad55; /* Orange for events */
            border-radius: 50%;
        }
        .event-list-item {
            background-color: var(--bg-light);
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 0.75rem;
            border: 1px solid #e2e8f0;
        }
        .event-list-item h6 {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.25rem;
        }
        .event-list-item p {
            font-size: 0.9rem;
            color: var(--text-medium);
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<!--my modal list-->
<div class="modal fade" id="detailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Event Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="eventDetailsContent">
                <!-- AJAX response will load here -->
                <p class="text-muted">Loading...</p>
            </div>
        </div>
    </div>
</div>

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
                        <div id="language-toggle"></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <section class="main-content-container">
        <div class="container">
            <?php include 'digging/add_event.php'; ?>
            <div class="info-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="page-heading">পরামর্শ ক্যালেন্ডার</h1>
                <p class="lead text-muted mb-4" id="page-description">আপনার পরামর্শ এবং আদালতের শুনানির সময়সূচী পরিচালনা করুন।</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
                    <div class="info-card">
                        <h3 class="section-header" id="calendar-overview-heading">Create Schedule</h3>
                        <label for="title">Title</label>
                        <input type="text" placeholder="Event Title" class="form-control" id="title" name="title" required>
                        <br>
                        <label for="date">Select Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                        <br>
                        <label for="time">Choose Best Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                        <br>
                        <label for="type">Select Type</label>
                        <select class="form-control" name="type" id="type">
                            <option selected disabled>Choose Event Type</option>
                            <option value="Online Video">Online Video</option>
                            <option value="In Office">In Office</option>
                            <option value="Home">Home</option>
                            <option value="Court">Court</option>
                        </select>
                        <br>
                        <label for="venue">Venue</label>
                        <input type="text" placeholder="Event Place" class="form-control" id="venue" name="venue" required>
                        <br>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary-custom" id="add-new-event-button" name="submit"><i data-lucide="plus-circle" class="me-2"></i> Add New Event</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="upcoming-events-heading">Upcoming Event</h3>
                        <div id="event-list">
                            <?php
                            include '../configuration/config.php';
                            $sql = "SELECT * FROM event WHERE user_id={$_SESSION['id']} ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="event-list-item" id="event-1">
                                <h6><?php echo $row['title'] ?></h6>
                                <p class="text-muted">Schedule: <?php echo $row['date'] ?>, <?php echo $row['time'] ?> | Type: <?php echo $row['type'] ?></p>

                                <button class="btn btn-sm btn-outline-primary mt-2 viewDetailsBtn"
                                        data-id="<?php echo $row['id'] ?>"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailsModal"
                                        id="manage-event-1"><i data-lucide="edit" class="me-1"></i> View</button>

                                <a href="digging/event-trash.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-danger mt-2" id="manage-event-1" role="button"><i data-lucide="trash" class="me-1"></i> Trash</a>
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
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        function  loadGoogleTranslate(){
            new google.translate.TranslateElement("language-toggle");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on("click", ".viewDetailsBtn", function() {
            let getId = $(this).data("id");

            $("#eventDetailsContent").html("<p class='text-muted'>Loading...</p>");

            $.ajax({
                url: "operation/ajax_show_event.php",
                type: "POST",
                data: { id: getId },
                success: function(response) {
                    $("#eventDetailsContent").html(response);
                },
                error: function() {
                    $("#eventDetailsContent").html("<p class='text-danger'>Error loading details.</p>");
                }
            });
        });
    </script>
</body>
</html>
