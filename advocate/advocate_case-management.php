<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Management - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .case-list-item {
            background-color: var(--bg-white);
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        .case-list-item h5 {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.25rem;
        }
        .case-list-item .badge {
            font-size: 0.8rem;
            padding: 0.4em 0.7em;
            border-radius: 0.3rem;
        }
        .case-list-item .actions button {
            margin-left: 0.5rem;
        }

        @media (max-width: 767px) {
            .case-list-item .actions {
                width: 100%;
                text-align: right;
                margin-top: 0.75rem;
            }
        }
    </style>
</head>
<body>

<!-- Bootstrap Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Case Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="caseId">
                <label class="form-label">Select Status:</label>
                <select id="newStatus" class="form-select">
                    <option value="Open">Open</option>
                    <option value="Assigned">Assigned</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Pending">Pending</option>
                    <option value="On Hold">On Hold</option>
                    <option value="Closed">Closed</option>
                    <option value="Dismissed">Dismissed</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="saveStatus">Save</button>
            </div>
        </div>
    </div>
</div>

<!--upoad modal-->
<div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="operation/ajax_upload_file.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Upload File for Case</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Hidden case id -->
                    <input type="hidden" id="fileId" name="case_id"> <!-- replace with dynamic case ID -->

                    <div class="mb-3">
                        <label class="form-label">Choose File</label>
                        <input type="file" name="case_file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="upload" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--details modal-->
<div class="modal fade" id="detailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Case Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="caseDetailsContent">
                <!-- AJAX response will load here -->
                <p class="text-muted">Loading...</p>
            </div>
        </div>
    </div>
</div>

<!--end modal-->
    <!-- Navigation Bar -->
    <?php include 'digging/navbar.php'; ?>
    <!-- Main Content Section -->
    <section class="main-content-container">
        <div class="container">
            <?php
            if (isset($_POST['submit'])){
                include '../configuration/config.php';
                $title = $_POST['title'];
                $detail = $_POST['detail'];
                $client_name = $_POST['client_name'];
                $status = 'Open';
                $date = date("Y-m-d");
                $code = strtoupper(uniqid());
                $user_id = $_SESSION['id'];

                $sql = "INSERT INTO cases(code,user_id,title,detail,client_name,status,date) VALUE('$code','$user_id','$title','$detail','$client_name','$status','$date');";

                $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if ($query) {
                    echo '<div class="alert alert-success" role="alert">Case Added Successfully </div>';
                }else{
                    echo '<div class="alert alert-danger" role="alert">Something Went Wrong ! </div>';
                }
            }
            ?>
            <div class="info-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="page-heading">Case Management</h1>
                <p class="lead text-muted mb-4" id="page-description">See an overview of all your active and closed cases, and manage case details.
                </p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="active-cases-heading">All  Cases</h3>
                        <div id="active-case-list">

                        </div>

                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="closed-cases-heading">Closed Cases</h3>
                        <div id="closed-case-list">

                        </div>

                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="info-card">
                        <h3 class="section-header" id="new-case-heading">Add New Case</h3>
                        <form id="add-new-case-form" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" autocomplete="off">
                            <div class="mb-3">
                                <label for="new-case-title" class="form-label" id="new-case-title-label">Case Title:</label>
                                <input type="text" name="title" class="form-control" id="new-case-title" placeholder="e.g. Cyber Crime, Divorce" required>
                            </div>
                            <div class="mb-3">
                                <label for="new-case-client" class="form-label" id="new-case-client-label">Client Name:</label>
                                <input type="text" class="form-control" id="new-case-client" placeholder="Client Name" name="client_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="new-case-description" class="form-label" id="new-case-description-label">Short Description:</label>
                                <textarea class="form-control" id="new-case-description" rows="3" placeholder="Write here Short Description" name="detail" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-primary-custom" id="add-case-button"><i data-lucide="plus-circle" class="me-2"></i> Add New Case</button>
                            </div>
                        </form>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        loadCases();
        loadClosedCases();
    });

    function loadCases() {
        $.ajax({
            url: "operation/ajax_case_show.php",
            type: "POST",
            success: function(data) {
                $("#active-case-list").html(data);
            }
        });
    }
    function loadClosedCases() {
        $.ajax({
            url: "operation/ajax_closed_cases.php",
            type: "POST",
            success: function(data) {
                $("#closed-case-list").html(data);
            }
        });
    }

    let selectedCaseId = null;

    // When "Update Status" button clicked, fill modal with case info
    $(document).on("click", ".updateStatusBtn", function() {
        selectedCaseId = $(this).data("id");
        let currentStatus = $(this).data("status");
        $("#caseId").val(selectedCaseId);
        $("#newStatus").val(currentStatus);
    });


    $("#saveStatus").click(function() {
        let newStatus = $("#newStatus").val();

        $.ajax({
            url: "operation/ajax_update_status.php",
            type: "POST",
            data: { id: selectedCaseId, status: newStatus },
            success: function(response) {
                if (response.trim() === "success") {
                    // update status text live in the div
                    $("#case-" + selectedCaseId + " .status-text").text(newStatus);
                    // also update the button's data-status
                    $("#case-" + selectedCaseId + " .updateStatusBtn").data("status", newStatus);
                    // close modal
                    $("#statusModal").modal("hide");
                    loadCases();
                    loadClosedCases();
                } else {
                    alert("Error updating status");
                }
            }
        });
    });

//======================File Upload-=-=-=-=-=-=-=-=-=-=-=
    let selectedFileId = null;
    $(document).on("click", ".uploadFileBtn", function() {
        selectedFileId = $(this).data("id");
        $("#fileId").val(selectedFileId);
    });

//=======================View Details=========================
    $(document).on("click", ".viewDetailsBtn", function() {
        let caseId = $(this).data("id");

        $("#caseDetailsContent").html("<p class='text-muted'>Loading...</p>");

        $.ajax({
            url: "operation/ajax_fetch_case_details.php",
            type: "POST",
            data: { id: caseId },
            success: function(response) {
                $("#caseDetailsContent").html(response);
            },
            error: function() {
                $("#caseDetailsContent").html("<p class='text-danger'>Error loading details.</p>");
            }
        });
    });
</script>
</body>
</html>
