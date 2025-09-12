<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Case - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .case-card {
            background-color: var(--bg-white);
            border-radius: 0.75rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .case-card h5 {
            color: var(--primary-blue);
            font-weight: 600;
        }
        .case-card .badge {
            font-size: 0.8rem;
            padding: 0.4em 0.7em;
            border-radius: 0.3rem;
        }
        .timeline {
            position: relative;
            padding-left: 2rem;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 0.5rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: var(--accent-blue);
        }
        .timeline-item {
            position: relative;
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.25rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background-color: var(--accent-blue);
            border: 2px solid var(--bg-white);
            z-index: 1;
        }
        .timeline-item h6 {
            font-weight: 600;
            color: var(--primary-blue);
        }
        .timeline-item p {
            font-size: 0.9rem;
            color: var(--text-medium);
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
                <h1 class="display-5 fw-bold mb-3" id="page-heading">মামলা ট্র্যাক করুন</h1>
                <p class="lead text-muted mb-4" id="page-description">আপনার রিপোর্ট করা মামলা এবং পরামর্শের রিয়েল-টাইম আপডেট পান।</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="search-case-heading">মামলা খুঁজুন</h3>
                        <form id="case-search-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">CR#</span>
                                <input type="text" class="form-control" placeholder="SECRET ID CODE" name="code" aria-describedby="basic-addon1">
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="search" class="btn btn-primary-custom" id="search-button"><i data-lucide="search" class="me-2"></i> মামলা খুঁজুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php
if(isset($_POST['search'])) {

    include '../configuration/config.php';
    $code = $_POST['code'];
    $sql = "SELECT * FROM cases LEFT JOIN users ON cases.user_id=users.id WHERE code = '$code'";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_assoc($result)) {
?>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-lg border-0">
                        <!-- Header -->
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">CR#<?php echo $row['code']; ?> - <?php echo $row['title']; ?></h5>
                                <small>Filed on: <?php echo $row['date']; ?></small>
                            </div>
                            <span class="badge bg-success fs-6"><?php echo $row['status']; ?></span>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <div class="row">
                                <!-- Left: Client + Description -->
                                <div class="col-md-8">
                                    <p><strong>Client Name:</strong> <?php echo $row['client_name']; ?></p>
                                    <p><strong>Assigned Advocate:</strong><?php echo $row['name']; ?> </p>
                                    <p><strong>Email:</strong>
                                        <?php echo $row['email']; ?>
                                    </p>
                                    <p><strong>Description:</strong>
                                        <?php echo $row['detail']; ?>
                                    </p>
                                </div>

                                <!-- Right: Attached Files -->
                                <div class="col-md-4">
                                    <h6 class="mb-2">Attached Files:</h6>
                                    <ul class="list-group list-group-flush">
                                        <?php
                                        $sql = "SELECT * FROM case_file WHERE case_id={$row['id']}";
                                        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                        while($data=mysqli_fetch_assoc($res)){
                                        ?>
                                        <li class="list-group-item py-2">
                                            <a href="../uploads/<?php echo $data['file_name'];?>" target="_blank" class="text-decoration-none" download>
                                                <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i> <?php echo $data['file_name'];?>
                                            </a>
                                        </li>
<?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div style="margin: auto;width: 60%;">
                                    <h3 class="mb-2">Sub Document Files</h3>
                                    <ul>
<?php
$q = "SELECT * FROM case_sub_document WHERE case_id={$row['id']}";
$r = mysqli_query($conn,$q) or die(mysqli_error($conn));
while($data = mysqli_fetch_assoc($r)){
?>
                                        <li>Type: <?php echo strtoupper($data['type']); ?> </li>
                                         <li>Description: <?php echo $data['des']; ?></li>
                                         <li>File: <a href="../uploads/<?php echo  $data['file_name']; ?>" style="text-decoration: none;" download><?php echo  $data['file_name']; ?></a></li>
                                        <hr>
<?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php }}?>
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
