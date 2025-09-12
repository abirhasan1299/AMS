<!DOCTYPE html>
<?php include '../configuration/security.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Cases - Advocate & Criminology Management System - আইনপ্রহরী</title>

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
            --red-500: #ef4444; /* red-500 equivalent */
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
        .section-header {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .table th, .table td {
            white-space: nowrap;
            padding: 1rem;
        }
        .badge-active {
            background-color: #d1fae5;
            color: #065f46;
        }
        .badge-pending {
            background-color: #fef3c7;
            color: #92400e;
        }
        .badge-closed {
            background-color: #fee2e2;
            color: #991b1b;
        }
        .action-icon {
            cursor: pointer;
            transition: color 0.2s ease;
        }
        .action-icon:hover {
            color: var(--accent-blue);
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
        /* Modal styles */
    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1050;
    }
    .modal-content-custom {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 90%;
        max-width: 400px;
    }
    .modal-header-custom {
        font-weight: 600;
        font-size: 1.25rem;
        margin-bottom: 10px;
    }
    .modal-body-custom {
        margin-bottom: 20px;
    }
    .modal-footer-custom {
        display: flex;
        justify-content: center;
    }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'digging/navbar.php'; ?>

    <!-- Main Content -->
    <main class="dashboard-container">
        <div class="container">
            <div class="content-card">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-header" id="header-cases">All Cases</h2>
                        <p class="sub-header" id="sub-header-desc">
                            A complete list of all cases in the system.
                        </p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th id="col-case-id">Case ID</th>
                                <th id="col-title">Case Title</th>
                                <th id="col-client">Client Name</th>
                                <th id="col-advocate">Advocate Name</th>
                                <th id="col-status">Status</th>
                                <th id="col-actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
       <?php
       include '../configuration/config.php';
       $sql = "SELECT * FROM cases LEFT JOIN users ON cases.user_id=users.id ORDER BY cases.id DESC";
       $result = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_assoc($result)) {
       ?>
                            <tr>
                                <td>CR#<?php echo $row['code'] ;?></td>
                                <td><?php echo $row['title'] ;?></td>
                                <td><?php echo $row['client_name'] ;?></td>
                                <td><?php echo $row['name'] ;?></td>
                                <td>
                                   <span class="badge bg-<?php
                                   if($row['status'] == 'Assigned'){
                                       echo 'primary';
                                   }elseif ($row['status'] == 'Closed') {
                                       echo 'danger';
                                   }elseif ($row['status'] == 'Open') {
                                       echo 'info';
                                   }elseif ($row['status'] == 'In Progress') {
                                       echo 'dark';
                                   }elseif ($row['status'] == 'Pending') {
                                       echo 'warning';
                                   }elseif ($row['status'] == 'On Hold') {
                                       echo 'light';
                                   }elseif ($row['status'] == 'Dismissed') {
                                       echo 'danger';
                                   }
                                   ?> text-dark">
                                   <?php echo $row['status'] ;?>
                                       </span>
                                </td>
                                <td>
                                    <a role="button" class="btn btn-sm btn-danger" href="operation/case-trash.php?id=<?php echo $row['id']; ?>">Trash</a>
                                </td>
                            </tr>
       <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Content -->
     
    <!-- Modal for custom messages -->
    <div id="customModal" class="modal-backdrop" style="display:none;">
        <div class="modal-content-custom">
            <div class="modal-header-custom" id="modal-header"></div>
            <div class="modal-body-custom" id="modal-body"></div>
            <div class="modal-footer-custom">
                <button class="btn btn-primary-custom" id="modal-close">OK</button>
            </div>
        </div>
    </div>


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
