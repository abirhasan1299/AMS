<!DOCTYPE html>
<?php
include '../configuration/security.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocate Profile - Advocate & Criminology Management System - আইনপ্রহরী</title>

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
            /* Removed padding-top here as body will now be a flex container */
            overflow-x: hidden; /* Prevent horizontal scroll */
            display: flex; /* Make body a flex container */
            flex-direction: column; /* Stack children vertically */
            min-height: 100vh; /* Ensure body takes full viewport height */
        }

        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
            /* Removed fixed-top and py-3 from HTML, added height here if needed */
            /* If fixed-top is used, body padding-top is still needed */
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

        .profile-container {
            padding: 2rem ; /* Changed from 3rem to 2rem */
            background-color: var(--bg-light);
            flex-grow: 1; /* Allow this section to grow and fill available space */
            display: flex; /* Enables flexbox for centering */
            align-items: center; /* Centers items vertically */
            justify-content: center; /* Centers items horizontally */
        }

        .profile-card {
            background-color: var(--bg-white);
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            width: 100%;
            max-width: 700px; /* Max width for the profile card */
            text-align: center;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--accent-blue);
            margin-bottom: 1.5rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            text-align: left;
            margin-top: 1.5rem;
        }

        .profile-info h4 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--light-blue);
            padding-bottom: 0.5rem;
        }

        .profile-info p {
            margin-bottom: 0.75rem;
            font-size: 1rem;
            color: var(--text-medium);
        }

        .profile-info p strong {
            color: var(--text-dark);
            display: inline-block;
            min-width: 120px; /* Align labels */
        }

        .btn-edit-profile {
            background-color: var(--accent-blue);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            margin-top: 2rem;
        }
        .btn-edit-profile:hover {
            background-color: #2b6cb0;
            transform: translateY(-2px);
            color: white;
        }

        /* Footer specific styling */
        footer a {
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: white !important;
        }

        .bg-gray-900-custom {
            background-color: var(--bg-dark);
        }

    </style>
</head>
<body>
<!--create modal-->
<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="digging/profile.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <!-- User Name -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>

                    <!-- Job Post -->
                    <div class="mb-3">
                        <label class="form-label">Job Post</label>
                        <input type="text" name="job_post" class="form-control" placeholder="Enter your job title" required>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="2" placeholder="Enter your address"></textarea>
                    </div>

                    <!-- Contact -->
                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contact" class="form-control" placeholder="Enter contact number">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>

                    <!-- Meet Link -->
                    <div class="mb-3">
                        <label class="form-label">Meeting Link</label>
                        <input type="url" name="meet_link" class="form-control" placeholder="Enter meeting link">
                    </div>

                    <!-- Profile Image -->
                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input type="file" name="profile_img" class="form-control" accept="image/*">
                    </div>

                    <!-- consultation fees -->
                    <div class="mb-3">
                        <label class="form-label">Fees</label>
                        <input type="text" name="fees" class="form-control" placeholder="Consultation Fees">
                    </div>

                    <!-- Specialization -->
                    <div class="mb-3">
                        <label class="form-label">Specialization</label>
                        <select name="specialization" class="form-select">
                            <option value="" selected disabled>Choose specialization</option>
                            <option value="criminal-law">Criminal Law</option>
                            <option value="family-law">Family Law</option>
                            <option value="corporate-law">Corporate Law</option>
                            <option value="civil-law">Civil Law</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Language -->
                    <div class="mb-3">
                        <label class="form-label">Languages</label>
                        <input type="text" name="language" class="form-control" placeholder="e.g. English, Bengali, Hindi">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="update" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--update modal-->
<?php
include '../configuration/config.php';
$sql = "SELECT * FROM profile WHERE user_id = {$_SESSION['id']}";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="modal fade" id="updateModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="digging/profile.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <!-- User Name -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
                    </div>

                    <!-- Job Post -->
                    <div class="mb-3">
                        <label class="form-label">Job Post</label>
                        <input type="text" name="job_post" class="form-control" value="<?php echo $row['post']; ?>" required>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="2" ><?php echo $row['address']; ?></textarea>
                    </div>

                    <!-- Contact -->
                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contact" class="form-control" value="<?php echo $row['contact']; ?>">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                    </div>

                    <!-- Meet Link -->
                    <div class="mb-3">
                        <label class="form-label">Meeting Link</label>
                        <input type="url" name="meet_link" class="form-control" value="<?php echo $row['meet_link']; ?>">
                    </div>

                    <!-- Profile Image -->
                    <div class="mb-3">
                        <img src="../uploads/profile/<?php echo $row['img_name']; ?>" alt="Profile Photo" class="profile-photo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input type="file" name="profile_img" class="form-control" accept="image/*">
                    </div>
                    <!-- consultation fees -->
                    <div class="mb-3">
                        <label class="form-label">Fees</label>
                        <input type="text" name="fees" class="form-control" value="<?php echo $row['fees']; ?>">
                    </div>
                    <!-- Specialization -->
                    <div class="mb-3">
                        <label class="form-label">Specialization</label>
                        <select name="specialization" class="form-select">
                            <option value="<?php echo $row['specialization']; ?>" selected><?php echo strtoupper($row['specialization']); ?></option>
                            <option value="" id="select-specialization">বিশেষজ্ঞতা নির্বাচন করুন</option>
                            <option value="family-law" id="opt-family-law">পারিবারিক আইন</option>
                            <option value="criminal-law" id="opt-criminal-law">ফৌজদারি আইন</option>
                            <option value="cyber-law" id="opt-cyber-law">সাইবার আইন</option>
                            <option value="property-law" id="opt-property-law">সম্পত্তি আইন</option>
                            <option value="corporate-law" id="opt-corporate-law">কর্পোরেট আইন</option>
                        </select>
                    </div>

                    <!-- Language -->
                    <div class="mb-3">
                        <label class="form-label">Languages</label>
                        <input type="text" name="language" class="form-control" value="<?php echo $row['language']; ?>">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="update" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }} ?>

<?php include 'digging/navbar.php'; ?>

    <!-- Profile Content Section -->
    <section class="profile-container">
        <div class="container" style="margin-top: 50px;">
            <?php
            include '../configuration/config.php';
            $sql = "SELECT * FROM profile WHERE user_id = {$_SESSION['id']}";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="profile-card">
                <img src="../uploads/profile/<?php echo $row['img_name']; ?>" alt="Profile Photo" class="profile-photo">
                <h2 class="display-6 fw-bold mb-3" id="profile-name">
                    <?php echo $row['name']; ?>
                </h2>
                <p class="lead text-muted" id="profile-designation"><?php echo $row['post']; ?></p>

                <div class="profile-info">
                    <h4 id="personal-info-heading">Personal Info</h4>
                    <p><strong id="label-address">Address:</strong> <span id="profile-address"><?php echo $row['address'];?></span></p>
                    <p><strong id="label-contact">Contact</strong> <span id="profile-contact"><?php echo $row['contact'];?></span></p>
                    <p><strong id="label-email">Email</strong> <span id="profile-email"><?php echo $row['email'];?></span></p>
                    <p><strong id="label-email">Specialization</strong> <span id="profile-email"><?php echo strtoupper($row['specialization']) ;?></span></p>
                    <p><strong id="label-email">Meet Link</strong> <span id="profile-email"><?php echo $row['meet_link'];?></span></p>
                    <p><strong id="label-email">Language</strong> <span id="profile-email"><?php echo $row['language'];?></span></p>
                </div>

                <button class="btn btn-edit-profile" id="edit-profile-button">
                    <i data-lucide="edit" class="me-2"></i> <span id="edit-profile-text" data-bs-toggle="modal" data-bs-target="#updateModal">Edit Profile</span>
                </button>
            </div>
            <?php }
            }else{
                echo '<strong style="color: green;">Create Your Profile First</strong><br>';
                echo '<button class="btn btn-edit-profile" id="edit-profile-button">
                    <i data-lucide="edit" class="me-2"></i> <span id="edit-profile-text" data-bs-toggle="modal" data-bs-target="#profileModal">Create Profile</span>
                </button>';
            }
            ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>
