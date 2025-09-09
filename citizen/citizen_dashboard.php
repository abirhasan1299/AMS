<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Dashboard - Advocate & Criminology Management System - আইনপ্রহরী</title>

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

        .welcome-card, .info-card { /* Combined for consistent styling */
            background-color: var(--bg-white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            margin-bottom: 2rem;
        }
        .info-card {
            margin-bottom: 0; /* Adjust margin for grid layout */
        }

        .action-card {
            background-color: var(--bg-white);
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            text-decoration: none; /* Remove underline from links */
            color: inherit; /* Inherit text color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
        }
        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .action-card i {
            color: var(--accent-blue);
            margin-bottom: 0.75rem;
        }
        .action-card h5 {
            font-weight: 600;
            color: var(--primary-blue);
        }

        .section-header {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .list-group-item {
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            border: 1px solid #e2e8f0; /* gray-200 */
            background-color: var(--bg-white);
        }
        .list-group-item:last-child {
            margin-bottom: 0;
        }

        .text-primary-custom {
            color: var(--accent-blue) !important;
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

        /* Styles for the role filter buttons */
        .role-filter-buttons .btn {
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .role-filter-buttons .btn-outline-primary-custom {
            border-color: var(--accent-blue);
            color: var(--accent-blue);
            background-color: transparent;
        }
        .role-filter-buttons .btn-outline-primary-custom:hover,
        .role-filter-buttons .btn-outline-primary-custom.active {
            background-color: var(--accent-blue);
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <i data-lucide="gavel" class="me-2 text-primary-custom-icon"></i>
                <span id="app-name" data-i18n-key="appName">AdvocatePro</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="feature.html" id="nav-features" data-i18n-key="navFeatures">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roles.html" id="nav-roles" data-i18n-key="navRoles">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" id="nav-contact" data-i18n-key="navContact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-primary d-flex align-items-center" href="citizen_profile.php" id="nav-profile">
                            <i data-lucide="user" class="me-2"></i> <span id="user-display-name">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary-custom d-flex align-items-center" href="index.html" id="nav-logout" data-i18n-key="navLogout">
                            <i data-lucide="log-out" class="me-2"></i> Logout
                        </a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <button class="btn btn-secondary-outline-custom" id="language-toggle">বাংলা</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Citizen Dashboard Content Section -->
    <section class="dashboard-container">
        <div class="container">
            <div class="welcome-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="welcome-heading" data-i18n-key="welcomeHeading">Welcome, Citizen!</h1>
                <p class="lead text-muted mb-2" id="user-id-display" data-i18n-key="userIdDisplay">Your User ID: <span class="fw-bold text-primary-custom" id="user-id-value">Loading...</span></p>
                <p class="text-muted" id="dashboard-tagline" data-i18n-key="dashboardTagline">Here are all your tools for legal needs and crime reporting.</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_Consultation.php" class="action-card">
                        <i data-lucide="calendar-plus" class="icon-size"></i>
                        <h5 data-i18n-key="actionBookConsultation">Book Legal Consultations</h5>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_crime-reporting.php" class="action-card">
                        <i data-lucide="alert-triangle" class="icon-size"></i>
                        <h5 data-i18n-key="actionReportCrime">Crime Reporting Portal</h5>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_case-tracking.php" class="action-card">
                        <i data-lucide="clipboard-check" class="icon-size"></i>
                        <h5 data-i18n-key="actionTrackCases">Case & Report Status Tracking</h5>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="citizen_notification.php" class="action-card">
                        <i data-lucide="bell" class="icon-size"></i>
                        <h5 data-i18n-key="actionNotifications">Notifications & Alerts</h5>
                    </a>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-12">
                    <div class="info-card">
                        <h3 class="section-header text-center" data-i18n-key="searchCasesHeading">Search Your Cases</h3>
                        <p class="text-muted text-center mb-4" data-i18n-key="searchCasesTagline">Search for your cases using your name or NID number.</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter your name or NID number" aria-label="Enter your name or NID number" id="case-search-input">
                            <button class="btn btn-primary-custom" type="button" id="case-search-button" data-i18n-key="searchButton">Search</button>
                        </div>
                        <div id="search-results" class="list-group mt-3">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Co-Actor Roles Section -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="info-card">
                        <h3 class="section-header text-center" data-i18n-key="coActorRolesHeading">Your Role in Cases</h3>
                        <p class="text-muted text-center mb-4" data-i18n-key="coActorRolesTagline">Here you can find a list of cases where you are involved as a Plaintiff or a Defendant.</p>

                        <!-- Role Filter Buttons -->
                        <div class="d-flex justify-content-center gap-3 mb-4 role-filter-buttons">
                            <button class="btn btn-outline-primary-custom active" data-filter="all" id="filter-all-cases" data-i18n-key="filterAllCases">All Cases</button>
                            <button class="btn btn-outline-primary-custom" data-filter="plaintiff" id="filter-plaintiff-cases" data-i18n-key="filterPlaintiffCases">As Plaintiff</button>
                            <button class="btn btn-outline-primary-custom" data-filter="defendant" id="filter-defendant-cases" data-i18n-key="filterDefendantCases">As Defendant</button>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-6 plaintiff-cases-col" id="plaintiff-cases-section">
                                <h4 class="h5 fw-bold mb-3 text-primary-custom" id="plaintiff-cases-heading" data-i18n-key="plaintiffCasesHeading">Cases as Plaintiff</h4>
                                <div class="list-group">
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <span data-i18n-key="plaintiffCase1">Case #CIVIL2025001 - Land Dispute</span>
                                        <span class="badge bg-secondary rounded-pill" data-i18n-key="plaintiffCaseStatus1">Hearing Ongoing</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <span data-i18n-key="plaintiffCase2">Case #CONSUMER2025003 - Product Defect</span>
                                        <span class="badge bg-success rounded-pill" data-i18n-key="plaintiffCaseStatus2">Verdict Issued</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 defendant-cases-col" id="defendant-cases-section">
                                <h4 class="h5 fw-bold mb-3 text-primary-custom" id="defendant-cases-heading" data-i18n-key="defendantCasesHeading">Cases as Defendant</h4>
                                <div class="list-group">
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <span data-i18n-key="defendantCase1">Case #CRIMINAL2025005 - False Accusation</span>
                                        <span class="badge bg-warning text-dark rounded-pill" data-i18n-key="defendantCaseStatus1">Investigating</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <span data-i18n-key="defendantCase2">Case #CIVIL2025002 - Breach of Contract</span>
                                        <span class="badge bg-primary rounded-pill" data-i18n-key="defendantCaseStatus2">Mediation</span>
                                    </div>
                                </div>
                            </div>
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
                <p class="mb-0" data-i18n-key="footerCopyright">&copy; <span id="current-year"></span> AdvocatePro. All rights reserved.</p>
            </div>
            <div class="d-flex justify-content-center gap-4">
                <a href="#" class="text-light text-decoration-none hover-white" data-i18n-key="footerPrivacy">Privacy Policy</a>
                <a href="#" class="text-light text-decoration-none hover-white" data-i18n-key="footerTerms">Terms of Service</a>
                <a href="#" class="text-light text-decoration-none hover-white" data-i18n-key="footerSitemap">Sitemap</a>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS CDN (Bundle with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Custom JavaScript for Language Switching -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Initialize Lucide icons
            lucide.createIcons();

            // Content object for both English and Bengali
            const translations = {
                en: {
                    appName: 'AdvocatePro',
                    navFeatures: 'Features',
                    navRoles: 'Roles',
                    navContact: 'Contact',
                    navLogout: 'Logout',
                    welcomeHeading: 'Welcome, Citizen!',
                    userIdDisplay: 'Your User ID: ',
                    dashboardTagline: 'Here are all your tools for legal needs and crime reporting.',
                    actionBookConsultation: 'Book Legal Consultations',
                    actionReportCrime: 'Crime Reporting Portal',
                    actionTrackCases: 'Case & Report Status Tracking',
                    actionNotifications: 'Notifications & Alerts',
                    recentConsultationsHeading: 'Your Recent Consultations',
                    consultationItem1: 'Consultation with Lawyer John Smith (Date: 2025-07-15)',
                    consultationStatus1: 'Upcoming',
                    consultationItem2: 'Consultation on Cybercrime (Date: 2025-06-20)',
                    consultationStatus2: 'Completed',
                    consultationItem3: 'Consultation on Family Law (Date: 2025-06-01)',
                    consultationStatus3: 'Completed',
                    recentReportsHeading: 'Your Recent Reports',
                    reportItem1: 'Crime Report #CRN202507001 (Date: 2025-07-10)',
                    reportStatus1: 'Investigating',
                    reportItem2: 'Missing Person Report #MPR202506005 (Date: 2025-06-25)',
                    reportStatus2: 'Under Review',
                    reportItem3: 'Cyber Fraud Report #CRN202506002 (Date: 2025-06-12)',
                    reportStatus3: 'Resolved',
                    searchCasesHeading: 'Search Your Cases',
                    searchCasesTagline: 'Search for your cases using your name or NID number.',
                    searchCasesPlaceholder: 'Enter your name or NID number',
                    searchButton: 'Search',
                    coActorRolesHeading: 'Your Role in Cases',
                    coActorRolesTagline: 'Here you can find a list of cases where you are involved as a Plaintiff or a Defendant.',
                    filterAllCases: 'All Cases',
                    filterPlaintiffCases: 'As Plaintiff',
                    filterDefendantCases: 'As Defendant',
                    plaintiffCasesHeading: 'Cases as Plaintiff',
                    plaintiffCase1: 'Case #CIVIL2025001 - Land Dispute',
                    plaintiffCaseStatus1: 'Hearing Ongoing',
                    plaintiffCase2: 'Case #CONSUMER2025003 - Product Defect',
                    plaintiffCaseStatus2: 'Verdict Issued',
                    defendantCasesHeading: 'Cases as Defendant',
                    defendantCase1: 'Case #CRIMINAL2025005 - False Accusation',
                    defendantCaseStatus1: 'Investigating',
                    defendantCase2: 'Case #CIVIL2025002 - Breach of Contract',
                    defendantCaseStatus2: 'Mediation',
                    footerCopyright: '© <span id="current-year"></span> AdvocatePro. All rights reserved.',
                    footerPrivacy: 'Privacy Policy',
                    footerTerms: 'Terms of Service',
                    footerSitemap: 'Sitemap'
                },
                bn: {
                    appName: 'আইনপ্রহরী',
                    navFeatures: 'বৈশিষ্ট্যসমূহ',
                    navRoles: 'ভূমিকা',
                    navContact: 'যোগাযোগ',
                    navLogout: 'লগআউট',
                    welcomeHeading: 'স্বাগতম, নাগরিক!',
                    userIdDisplay: 'আপনার ইউজার আইডি: ',
                    dashboardTagline: 'আপনার আইনি প্রয়োজন এবং অপরাধ রিপোর্টিং এর জন্য এখানে আপনার সমস্ত সরঞ্জাম রয়েছে।',
                    actionBookConsultation: 'পরামর্শ বুক করুন',
                    actionReportCrime: 'অপরাধ রিপোর্ট করুন',
                    actionTrackCases: 'মামলা ট্র্যাক করুন',
                    actionNotifications: 'বিজ্ঞপ্তি ও সতর্কতা',
                    recentConsultationsHeading: 'আপনার সাম্প্রতিক পরামর্শ',
                    consultationItem1: 'আইনজীবী জন স্মিথের সাথে পরামর্শ (তারিখ: 2025-07-15)',
                    consultationStatus1: 'আসন্ন',
                    consultationItem2: 'সাইবার ক্রাইম বিষয়ে পরামর্শ (তারিখ: 2025-06-20)',
                    consultationStatus2: 'সম্পূর্ণ',
                    consultationItem3: 'পারিবারিক আইন বিষয়ে পরামর্শ (তারিখ: 2025-06-01)',
                    consultationStatus3: 'সম্পূর্ণ',
                    recentReportsHeading: 'আপনার সাম্প্রতিক রিপোর্ট',
                    reportItem1: 'অপরাধ রিপোর্ট #CRN202507001 (তারিখ: 2025-07-10)',
                    reportStatus1: 'তদন্তাধীন',
                    reportItem2: 'নিখোঁজ ব্যক্তি রিপোর্ট #MPR202506005 (তারিখ: 2025-06-25)',
                    reportStatus2: 'পর্যালোচনাধীন',
                    reportItem3: 'সাইবার জালিয়াতি রিপোর্ট #CRN202506002 (তারিখ: 2025-06-12)',
                    reportStatus3: 'সমাধান করা হয়েছে',
                    searchCasesHeading: 'আপনার মামলা অনুসন্ধান করুন',
                    searchCasesTagline: 'আপনার নাম অথবা এনআইডি নম্বর ব্যবহার করে আপনার মামলা অনুসন্ধান করুন।',
                    searchCasesPlaceholder: 'আপনার নাম অথবা এনআইডি নম্বর লিখুন',
                    searchButton: 'অনুসন্ধান করুন',
                    coActorRolesHeading: 'মামলায় আপনার ভূমিকা',
                    coActorRolesTagline: 'এখানে আপনি যেসব মামলায় বাদী (Plaintiff) বা বিবাদী (Defendant) হিসেবে জড়িত, সেগুলোর তালিকা দেখতে পাবেন।',
                    filterAllCases: 'সব মামলা',
                    filterPlaintiffCases: 'বাদী হিসেবে',
                    filterDefendantCases: 'বিবাদী হিসেবে',
                    plaintiffCasesHeading: 'বাদী (Plaintiff) হিসেবে মামলাসমূহ',
                    plaintiffCase1: 'মামলা #CIVIL2025001 - জমি বিবাদ',
                    plaintiffCaseStatus1: 'শুনানি চলছে',
                    plaintiffCase2: 'মামলা #CONSUMER2025003 - পণ্য ত্রুটি',
                    plaintiffCaseStatus2: 'রায় প্রদান',
                    defendantCasesHeading: 'বিবাদী (Defendant) হিসেবে মামলাসমূহ',
                    defendantCase1: 'মামলা #CRIMINAL2025005 - মিথ্যা অভিযোগ',
                    defendantCaseStatus1: 'তদন্তাধীন',
                    defendantCase2: 'মামলা #CIVIL2025002 - Breach of Contract',
                    defendantCaseStatus2: 'Mediation',
                    footerCopyright: '© <span id="current-year"></span> আইনপ্রহরী. সর্বস্বত্ব সংরক্ষিত।',
                    footerPrivacy: 'গোপনীয়তা নীতি',
                    footerTerms: 'পরিষেবার শর্তাবলী',
                    footerSitemap: 'সাইটম্যাপ'
                }
            };

            let currentLang = 'en'; // Primary language is English
            const languageToggle = document.getElementById('language-toggle');

            // Function to update all text content based on the current language
            function updateContent() {
                const elements = document.querySelectorAll('[data-i18n-key]');
                const lang = currentLang;

                elements.forEach(element => {
                    const key = element.getAttribute('data-i18n-key');
                    if (translations[lang] && translations[lang][key]) {
                        // Handle special cases like placeholder text
                        if (element.tagName === 'INPUT' && element.hasAttribute('placeholder')) {
                           element.setAttribute('placeholder', translations[lang][key]);
                        } else {
                            // Check for an inner span to preserve its content
                            const innerSpan = element.querySelector('span');
                            if (innerSpan && innerSpan.id === 'user-id-value') {
                                const originalText = translations[lang][key];
                                element.innerHTML = `${originalText} <span class="fw-bold text-primary-custom" id="user-id-value">${innerSpan.textContent}</span>`;
                            } else if (innerSpan && innerSpan.id === 'current-year') {
                                const originalText = translations[lang][key];
                                element.innerHTML = `${originalText}`;
                            } else {
                                element.textContent = translations[lang][key];
                            }
                        }
                    }
                });

                // Update the search input placeholder specifically
                const searchInput = document.getElementById('case-search-input');
                if (searchInput) {
                    searchInput.setAttribute('placeholder', translations[lang]['searchCasesPlaceholder']);
                }

                // Set the language toggle button text
                languageToggle.textContent = currentLang === 'en' ? 'বাংলা' : 'English';
                // Update the html lang attribute
                document.documentElement.lang = currentLang;
            }

            
            
            // Event listener for language toggle button
            if (languageToggle) {
                languageToggle.addEventListener('click', () => {
                    currentLang = currentLang === 'en' ? 'bn' : 'en';
                    updateContent();
                });
            }

            // Set current year in the footer
            const currentYearSpan = document.getElementById('current-year');
            if (currentYearSpan) {
                currentYearSpan.textContent = new Date().getFullYear();
            }

            // --- Existing filter functionality, left unchanged but updated with new IDs ---
            const filterButtons = document.querySelectorAll('.role-filter-buttons .btn');
            const plaintiffCasesSection = document.getElementById('plaintiff-cases-section');
            const defendantCasesSection = document.getElementById('defendant-cases-section');

            function filterCases(filterType) {
                // Remove 'active' class from all buttons
                filterButtons.forEach(button => button.classList.remove('active'));

                // Add 'active' class to the clicked button
                const activeButton = document.querySelector(`.role-filter-buttons .btn[data-filter="${filterType}"]`);
                if (activeButton) {
                    activeButton.classList.add('active');
                }

                // Show/hide sections based on filterType
                if (filterType === 'all') {
                    plaintiffCasesSection.style.display = 'block';
                    defendantCasesSection.style.display = 'block';
                } else if (filterType === 'plaintiff') {
                    plaintiffCasesSection.style.display = 'block';
                    defendantCasesSection.style.display = 'none';
                } else if (filterType === 'defendant') {
                    plaintiffCasesSection.style.display = 'none';
                    defendantCasesSection.style.display = 'block';
                }
            }

            // Attach event listeners to filter buttons
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filterType = button.dataset.filter;
                    filterCases(filterType);
                });
            });

            // Initial content load, setting English as primary
            setUserIdAndName();
            updateContent();
            filterCases('all');
        });
    </script>
</body>
</html>
