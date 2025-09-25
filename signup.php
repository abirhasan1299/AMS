<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .btn-secondary-custom {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 0.75rem 2rem;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }
        .btn-secondary-custom:hover {
            background-color: white;
            color: var(--secondary-blue);
            transform: translateY(-2px);
        }

        .btn-light-custom {
            background-color: white;
            color: var(--secondary-blue);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 9999px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        .btn-light-custom:hover {
            background-color: var(--lighter-blue);
            transform: translateY(-2px);
            color: var(--secondary-blue);
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

        .section-heading {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .section-subheading {
            color: var(--text-medium);
            margin-bottom: 3rem;
            max-width: 50rem;
            margin-left: auto;
            margin-right: auto;
        }

        .signup-container {
            min-height: calc(100vh - 76px - 64px); /* Full height minus navbar and footer */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }

        .signup-card {
            background-color: var(--bg-white);
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            max-width: 550px;
            width: 100%;
        }
        .form-control, .form-select {
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 0.25rem rgba(49, 130, 206, 0.25);
        }
        .text-primary-custom {
            color: var(--accent-blue) !important;
        }
        .role-note {
            font-size: 0.875rem;
            color: var(--text-light);
            margin-top: 0.5rem;
        }

        .bg-blue-50-custom {
            background-color: var(--light-blue);
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
                        <a class="nav-link" href="feature.html" id="nav-features">বৈশিষ্ট্যসমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roles.html" id="nav-roles">ভূমিকা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" id="nav-contact">যোগাযোগ</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary-custom d-flex align-items-center" href="login.php" id="nav-login">
                            <i data-lucide="log-in" class="me-2"></i> প্রবেশ করুন
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-primary d-flex align-items-center" href="signup.php" id="nav-signup">
                            <i data-lucide="user-plus" class="me-2"></i> Sign Up
                        </a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <div  id="toggle"></div>
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

    <!-- Sign Up Content Section -->
    <section class="signup-container bg-blue-50-custom">
        <div class="signup-card text-center">
            <h2 class="h3 fw-bold mb-4" id="signup-heading">নিবন্ধন করুন</h2>
            <?php
            if (isset($_POST['submit'])) {
                include 'configuration/config.php';
                $name= $_POST['name'];
                $unique_code =strtoupper(uniqid());
                $email= $_POST['email'];
                $phone  = $_POST['phone'];
                $password= $_POST['password'];
                $confirm_password= $_POST['confirm_password'];
                $role = $_POST['role'];
                if($password != $confirm_password){
                    echo '<div class="alert alert-danger" role="alert">
                        Passwords do not match!
                    </div>';
                }else{
                    $sql = "INSERT INTO users(unique_code,name,email,phone,password,role) VALUES ('$unique_code','$name','$email','$phone','$password','$role')";
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    if($query){
                        echo '<div class="alert alert-success" role="alert">Signup Successfully Done, Go <a href="login.php">Login</a> Area ...</div>';
                    }else{
                        echo '<div class="alert alert-danger" role="alert">Something Went Wrong</div>';
                    }

                }
            }
            ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                <div class="mb-3 text-start">
                    <label for="fullName" class="form-label" id="label-full-name">পুরো নাম</label>
                    <input type="text" name="name" class="form-control" id="fullName" placeholder="আপনার পুরো নাম লিখুন" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="signupEmail" class="form-label" id="label-email">ইমেল</label>
                    <input type="email" name="email" class="form-control" id="signupEmail" placeholder="আপনার ইমেল লিখুন" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="phoneNumber" class="form-label" id="label-phone">ফোন নম্বর (ঐচ্ছিক)</label>
                    <input type="tel" name="phone" class="form-control" id="phoneNumber" placeholder="আপনার ফোন নম্বর লিখুন">
                </div>
                <div class="mb-3 text-start">
                    <label for="signupPassword" class="form-label" id="label-password">পাসওয়ার্ড</label>
                    <input type="password" name="password" class="form-control" id="signupPassword" placeholder="একটি পাসওয়ার্ড তৈরি করুন" required>
                </div>
                <div class="mb-4 text-start">
                    <label for="confirmPassword" class="form-label" id="label-confirm-password">পাসওয়ার্ড নিশ্চিত করুন</label>
                    <input type="password" name="confirm_password" class="form-control" id="confirmPassword" placeholder="পাসওয়ার্ড পুনরায় লিখুন" required>
                </div>
                <div class="mb-4 text-start">
                    <label for="userRole" class="form-label" id="label-role">আপনার ভূমিকা নির্বাচন করুন</label>
                    <select class="form-select" id="userRole" name="role" required>
                        <option value="">নির্বাচন করুন...</option>
                        <option value="citizen" id="option-citizen">নাগরিক</option>
                        <option value="advocate" id="option-advocate">আইনজীবী</option>
                        <option value="admin" id="option-admin">প্রশাসক</option>
                    </select>
                    <small class="form-text role-note" id="role-verification-note">দ্রষ্টব্য: আইনজীবী, পুলিশ কর্মকর্তা, বিচারক এবং প্রশাসকের ভূমিকার জন্য যাচাইকরণ প্রয়োজন হবে।</small>
                </div>
                <button type="submit" class="btn btn-primary-custom w-100 mb-3" id="btn-signup" name="submit">নিবন্ধন করুন</button>
                <p class="text-muted" id="have-account">আপনার কি ইতিমধ্যে অ্যাকাউন্ট আছে? <a href="login.php" class="text-primary-custom text-decoration-none" id="login-link">লগইন করুন</a></p>
            </form>
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

    <!-- Custom JavaScript for Language Switching -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Lucide icons
            lucide.createIcons();

            // Content object for both English and Bengali
            const content = {
                en: {
                    appName: "AdvocatePro",
                    nav: {
                        features: "Features",
                        roles: "Roles",
                        contact: "Contact",
                        login: "Login",
                        signUp: "Sign Up",
                    },
                    signupPage: {
                        heading: "Sign Up",
                        labelFullName: "Full Name",
                        placeholderFullName: "Enter your full name",
                        labelEmail: "Email",
                        placeholderEmail: "Enter your email",
                        labelPhone: "Phone Number (Optional)",
                        placeholderPhone: "Enter your phone number",
                        labelPassword: "Password",
                        placeholderPassword: "Create a password",
                        labelConfirmPassword: "Confirm Password",
                        placeholderConfirmPassword: "Re-enter password",
                        labelRole: "Select Your Role",
                        optionSelect: "Select...",
                        optionCitizen: "Citizen",
                        optionAdvocate: "Advocate",
                        optionAdmin: "Administrator",
                        roleVerificationNote: "Note: Advocate, and Administrator roles will require verification.",
                        btnSignup: "Sign Up",
                        haveAccount: "Already have an account?",
                        loginLink: "Login",
                    },
                    footer: {
                        copyright: "Ainprohori. All rights reserved.",
                        privacyPolicy: "Privacy Policy",
                        termsOfService: "Terms of Service",
                        sitemap: "Sitemap",
                    },
                },
                bn: {
                    appName: "আইনপ্রহরী",
                    nav: {
                        features: "বৈশিষ্ট্যসমূহ",
                        roles: "ভূমিকা",
                        contact: "যোগাযোগ",
                        login: "প্রবেশ করুন",
                        signUp: "নিবন্ধন করুন",
                    },
                    signupPage: {
                        heading: "নিবন্ধন করুন",
                        labelFullName: "পুরো নাম",
                        placeholderFullName: "আপনার পুরো নাম লিখুন",
                        labelEmail: "ইমেল",
                        placeholderEmail: "আপনার ইমেল লিখুন",
                        labelPhone: "ফোন নম্বর (ঐচ্ছিক)",
                        placeholderPhone: "আপনার ফোন নম্বর লিখুন",
                        labelPassword: "পাসওয়ার্ড",
                        placeholderPassword: "একটি পাসওয়ার্ড তৈরি করুন",
                        labelConfirmPassword: "পাসওয়ার্ড নিশ্চিত করুন",
                        placeholderConfirmPassword: "পাসওয়ার্ড পুনরায় লিখুন",
                        labelRole: "আপনার ভূমিকা নির্বাচন করুন",
                        optionSelect: "নির্বাচন করুন...",
                        optionCitizen: "নাগরিক",
                        optionAdvocate: "আইনজীবী",
                        optionAdmin: "প্রশাসক",
                        roleVerificationNote: "দ্রষ্টব্য: আইনজীবী, পুলিশ কর্মকর্তা, বিচারক এবং প্রশাসকের ভূমিকার জন্য যাচাইকরণ প্রয়োজন হবে।",
                        btnSignup: "নিবন্ধন করুন",
                        haveAccount: "আপনার কি ইতিমধ্যে অ্যাকাউন্ট আছে?",
                        loginLink: "লগইন করুন",
                    },
                    footer: {
                        copyright: "আইনপ্রহরী. সর্বস্বত্ব সংরক্ষিত।",
                        privacyPolicy: "গোপনীয়তা নীতি",
                        termsOfService: "পরিষেবার শর্তাবলী",
                        sitemap: "সাইটম্যাপ",
                    },
                },
            };

           let currentLang = 'en'; // Initial language

            function updateContent() {
                const t = content[currentLang];

                // Navbar
                document.getElementById('app-name').textContent = t.appName;
                document.getElementById('nav-features').textContent = t.nav.features;
                document.getElementById('nav-roles').textContent = t.nav.roles;
                document.getElementById('nav-contact').textContent = t.nav.contact;
                document.getElementById('nav-login').innerHTML = `<i data-lucide="log-in" class="me-2"></i> ${t.nav.login}`;
                document.getElementById('nav-signup').innerHTML = `<i data-lucide="user-plus" class="me-2"></i> ${t.nav.signUp}`;
                document.getElementById('language-toggle').textContent = currentLang === 'en' ? 'বাংলা' : 'English';

                // Sign Up Page
                document.getElementById('signup-heading').textContent = t.signupPage.heading;
                document.getElementById('label-full-name').textContent = t.signupPage.labelFullName;
                document.getElementById('fullName').placeholder = t.signupPage.placeholderFullName;
                document.getElementById('label-email').textContent = t.signupPage.labelEmail;
                document.getElementById('signupEmail').placeholder = t.signupPage.placeholderEmail;
                document.getElementById('label-phone').textContent = t.signupPage.labelPhone;
                document.getElementById('phoneNumber').placeholder = t.signupPage.placeholderPhone;
                document.getElementById('label-password').textContent = t.signupPage.labelPassword;
                document.getElementById('signupPassword').placeholder = t.signupPage.placeholderPassword;
                document.getElementById('label-confirm-password').textContent = t.signupPage.labelConfirmPassword;
                document.getElementById('confirmPassword').placeholder = t.signupPage.placeholderConfirmPassword;
                document.getElementById('label-role').textContent = t.signupPage.labelRole;
                document.getElementById('userRole').querySelector('option[value=""]').textContent = t.signupPage.optionSelect;
                document.getElementById('option-citizen').textContent = t.signupPage.optionCitizen;
                document.getElementById('option-advocate').textContent = t.signupPage.optionAdvocate;
                document.getElementById('option-admin').textContent = t.signupPage.optionAdmin;
                document.getElementById('role-verification-note').textContent = t.signupPage.roleVerificationNote;
                document.getElementById('btn-signup').textContent = t.signupPage.btnSignup;
                document.getElementById('have-account').innerHTML = `${t.signupPage.haveAccount} <a href="login.php" class="text-primary-custom text-decoration-none" id="login-link">${t.signupPage.loginLink}</a>`;

                // Footer
                document.getElementById('current-year').textContent = new Date().getFullYear();
                document.getElementById('footer-copyright').textContent = `© ${new Date().getFullYear()} ${t.footer.copyright}`;
                document.getElementById('footer-privacy').textContent = t.footer.privacyPolicy;
                document.getElementById('footer-terms').textContent = t.footer.termsOfService;
                document.getElementById('footer-sitemap').textContent = t.footer.sitemap;

                lucide.createIcons(); // Re-create Lucide icons after content update
            }

            document.getElementById('language-toggle').addEventListener('click', () => {
                currentLang = currentLang === 'en' ? 'bn' : 'en';
                document.documentElement.lang = currentLang;
                updateContent();
            });

            updateContent(); // Initial content load
        });
    </script>
</body>
</html>
