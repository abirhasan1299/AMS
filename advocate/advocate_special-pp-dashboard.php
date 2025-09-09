<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Public Prosecutor Dashboard - আইনপ্রহরী</title>

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

        .dashboard-container {
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

        .action-button-group .btn {
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .action-button-group .btn:last-child {
            margin-right: 0;
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
                        <button class="btn btn-secondary-outline-custom" id="language-toggle">English</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Special PP Dashboard Content Section -->
    <section class="dashboard-container">
        <div class="container">
            <div class="info-card text-center">
                <h1 class="display-5 fw-bold mb-3" id="role-heading">বিশেষ পাবলিক প্রসিকিউটর / ট্রাইব্যুনাল অ্যাডভোকেট ড্যাশবোর্ড</h1>
                <p class="lead text-muted mb-4" id="role-description">উচ্চ-প্রোফাইল বা ট্রাইব্যুনাল-স্তরের মামলাগুলির জন্য নিযুক্ত।</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-6">
                    <div class="info-card">
                        <h3 class="section-header" id="high-profile-cases-heading">উচ্চ-প্রোফাইল কেস তালিকা</h3>
                        <div class="list-group">
                            <div class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="mb-2 mb-md-0">
                                    <span class="fw-bold" id="case-item-1">মামলা #SPP2025-001: সাইবার জালিয়াতি ট্রাইব্যুনাল</span><br>
                                    <small class="text-muted" id="case-status-1">স্থিতি: <span class="badge bg-danger">উচ্চ নিরাপত্তা</span></small>
                                </div>
                                <div class="action-button-group">
                                    <button class="btn btn-sm btn-outline-primary" id="access-classified-1"><i data-lucide="lock" class="me-1"></i> শ্রেণীবদ্ধ অ্যাক্সেস</button>
                                    <button class="btn btn-sm btn-outline-success" id="submit-tribunal-doc-1"><i data-lucide="file-check" class="me-1"></i> নথি জমা দিন</button>
                                </div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="mb-2 mb-md-0">
                                    <span class="fw-bold" id="case-item-2">মামলা #SPP2025-002: আন্তর্জাতিক অর্থ পাচার</span><br>
                                    <small class="text-muted" id="case-status-2">স্থিতি: <span class="badge bg-warning text-dark">একাধিক সংস্থা সমন্বয়</span></small>
                                </div>
                                <div class="action-button-group">
                                    <button class="btn btn-sm btn-outline-primary" id="access-classified-2"><i data-lucide="lock" class="me-1"></i> শ্রেণীবদ্ধ অ্যাক্সেস</button>
                                    <button class="btn btn-sm btn-outline-success" id="submit-tribunal-doc-2"><i data-lucide="file-check" class="me-1"></i> নথি জমা দিন</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary-custom" id="view-all-cases-button"><i data-lucide="list-checks" class="me-2"></i> সমস্ত উচ্চ-প্রোফাইল মামলা দেখুন</button>
                        </div>
                    </div>
                </div>
               
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="info-card">
                        <h3 class="section-header" id="other-info-heading">অন্যান্য গুরুত্বপূর্ণ তথ্য</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" id="other-info-1"><i data-lucide="info" class="me-2 text-primary-custom"></i> **কেস ট্যাগ:** কেস ট্যাগ (যেমন: "উচ্চ নিরাপত্তা") এর উপর ভিত্তি করে দেখা/সম্পাদনা অনুমতি।</li>
                            <li class="list-group-item" id="other-info-2"><i data-lucide="info" class="me-2 text-primary-custom"></i> **সহযোগিতা:** একাধিক সংস্থা এবং অন্যান্য অ্যাডভোকেটদের সাথে সহযোগিতা।</li>
                            <li class="list-group-item" id="other-info-3"><i data-lucide="info" class="me-2 text-primary-custom"></i> **নোটিফিকেশন অগ্রাধিকার:** অন্যান্য অ্যাডভোকেটদের তুলনায় উচ্চ অগ্রাধিকারের বিজ্ঞপ্তি।</li>
                        </ul>
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

    <!-- Custom JavaScript for Language Switching and Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Lucide icons
            lucide.createIcons();

            // Content object for both English and Bengali
            const content = {
                en: {
                    appName: "AdvocatePro",
                    nav: {
                         backButton: "Back to Dashboard",
                        features: "Features",
                        roles: "Roles",
                        contact: "Contact",
                        profile: "Profile",
                        logout: "Logout",
                    },
                    dashboard: {
                        roleHeading: "Special Public Prosecutor / Tribunal Advocate Dashboard",
                        roleDescription: "Assigned for high-profile or tribunal-level cases.",
                        highProfileCasesHeading: "High-Profile Case List",
                        caseItem1: "Case #SPP2025-001: Cyber Fraud Tribunal",
                        caseStatus1: "Status: High Security",
                        caseItem2: "Case #SPP2025-002: International Money Laundering",
                        caseStatus2: "Status: Multi-Agency Coordination",
                        accessClassified: "Access Classified",
                        submitTribunalDoc: "Submit Document",
                        viewAllCases: "View All High-Profile Cases",
                        agencyCollaborationHeading: "Agency Collaboration Requests",
                        collaborationItem1: "Digital Forensic Report (Case #SPP2025-001)",
                        collaborationSource1: "Source: Police Cyber Unit",
                        collaborationItem2: "Intelligence Brief (Case #SPP2025-002)",
                        collaborationSource2: "Source: Intelligence Agency",
                        reviewReport: "Review Report",
                        approve: "Approve",
                        upcomingTribunalHeading: "Upcoming Tribunal Hearings",
                        tribunalItem1: "Case #SPP2025-001: Final Argument",
                        tribunalDate1: "Date: 2025-07-28",
                        confirmAttendance: "Confirm Attendance",
                        otherInfoHeading: "Other Important Information",
                        otherInfo1: "Case Tags: View/edit permissions based on case tags (e.g., 'High Security').",
                        otherInfo2: "Collaboration: Collaborates with multiple agencies and other advocates.",
                        otherInfo3: "Notification Priority: Elevated notification priority compared to other advocates.",
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
                          backButton: "ড্যাশবোর্ডে ফিরে যান",
                        features: "বৈশিষ্ট্যসমূহ",
                        roles: "ভূমিকা",
                        contact: "যোগাযোগ",
                        profile: "প্রোফাইল",
                        logout: "লগআউট",
                    },
                    dashboard: {
                        roleHeading: "বিশেষ পাবলিক প্রসিকিউটর / ট্রাইব্যুনাল অ্যাডভোকেট ড্যাশবোর্ড",
                        roleDescription: "উচ্চ-প্রোফাইল বা ট্রাইব্যুনাল-স্তরের মামলাগুলির জন্য নিযুক্ত।",
                        highProfileCasesHeading: "উচ্চ-প্রোফাইল কেস তালিকা",
                        caseItem1: "মামলা #SPP2025-001: সাইবার জালিয়াতি ট্রাইব্যুনাল",
                        caseStatus1: "স্থিতি: উচ্চ নিরাপত্তা",
                        caseItem2: "মামলা #SPP2025-002: আন্তর্জাতিক অর্থ পাচার",
                        caseStatus2: "স্থিতি: একাধিক সংস্থা সমন্বয়",
                        accessClassified: "শ্রেণীবদ্ধ অ্যাক্সেস",
                        submitTribunalDoc: "নথি জমা দিন",
                        viewAllCases: "সমস্ত উচ্চ-প্রোফাইল মামলা দেখুন",
                        agencyCollaborationHeading: "এজেন্সি সহযোগিতা অনুরোধ",
                        collaborationItem1: "ডিজিটাল ফরেনসিক রিপোর্ট (কেস #SPP2025-001)",
                        collaborationSource1: "উৎস: পুলিশ সাইবার ইউনিট",
                        collaborationItem2: "গোয়েন্দা তথ্য (কেস #SPP2025-002)",
                        collaborationSource2: "উৎস: গোয়েন্দা সংস্থা",
                        reviewReport: "রিপোর্ট পর্যালোচনা করুন",
                        approve: "অনুমোদন করুন",
                        upcomingTribunalHeading: "আসন্ন ট্রাইব্যুনাল শুনানি",
                        tribunalItem1: "মামলা #SPP2025-001: চূড়ান্ত যুক্তি",
                        tribunalDate1: "তারিখ: 2025-07-28",
                        confirmAttendance: "উপস্থিতি নিশ্চিত করুন",
                        otherInfoHeading: "অন্যান্য গুরুত্বপূর্ণ তথ্য",
                        otherInfo1: "কেস ট্যাগ: কেস ট্যাগ (যেমন: 'উচ্চ নিরাপত্তা') এর উপর ভিত্তি করে দেখা/সম্পাদনা অনুমতি।",
                        otherInfo2: "সহযোগিতা: একাধিক সংস্থা এবং অন্যান্য অ্যাডভোকেটদের সাথে সহযোগিতা।",
                        otherInfo3: "নোটিফিকেশন অগ্রাধিকার: অন্যান্য অ্যাডভোকেটদের তুলনায় উচ্চ অগ্রাধিকারের বিজ্ঞপ্তি।",
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

            // Get elements that will be updated
            const elementsToUpdate = {
                appName: document.getElementById('app-name'),
                backButtonText: document.getElementById('back-button-text'),
                navFeatures: document.getElementById('nav-features'),
                navRoles: document.getElementById('nav-roles'),
                navContact: document.getElementById('nav-contact'),
                navProfile: document.getElementById('nav-profile'),
                userDisplayName: document.getElementById('user-display-name'),
                navLogout: document.getElementById('nav-logout'),
                languageToggle: document.getElementById('language-toggle'),

                roleHeading: document.getElementById('role-heading'),
                roleDescription: document.getElementById('role-description'),
                highProfileCasesHeading: document.getElementById('high-profile-cases-heading'),
                caseItem1: document.getElementById('case-item-1'),
                caseStatus1: document.getElementById('case-status-1'),
                accessClassified1: document.getElementById('access-classified-1'),
                submitTribunalDoc1: document.getElementById('submit-tribunal-doc-1'),
                caseItem2: document.getElementById('case-item-2'),
                caseStatus2: document.getElementById('case-status-2'),
                accessClassified2: document.getElementById('access-classified-2'),
                submitTribunalDoc2: document.getElementById('submit-tribunal-doc-2'),
                viewAllCasesButton: document.getElementById('view-all-cases-button'),

                agencyCollaborationHeading: document.getElementById('agency-collaboration-heading'),
                collaborationItem1: document.getElementById('collaboration-item-1'),
                collaborationSource1: document.getElementById('collaboration-source-1'),
                reviewReport1: document.getElementById('review-report-1'),
                approveReport1: document.getElementById('approve-report-1'),
                collaborationItem2: document.getElementById('collaboration-item-2'),
                collaborationSource2: document.getElementById('collaboration-source-2'),
                reviewReport2: document.getElementById('review-report-2'),
                approveReport2: document.getElementById('approve-report-2'),
                upcomingTribunalHeading: document.getElementById('upcoming-tribunal-heading'),
                tribunalItem1: document.getElementById('tribunal-item-1'),
                tribunalDate1: document.getElementById('tribunal-date-1'),
                confirmTribunal1: document.getElementById('confirm-tribunal-1'),

                otherInfoHeading: document.getElementById('other-info-heading'),
                otherInfo1: document.getElementById('other-info-1'),
                otherInfo2: document.getElementById('other-info-2'),
                otherInfo3: document.getElementById('other-info-3'),

                footerCopyright: document.getElementById('footer-copyright'),
                currentYear: document.getElementById('current-year'),
                footerPrivacy: document.getElementById('footer-privacy'),
                footerTerms: document.getElementById('footer-terms'),
                footerSitemap: document.getElementById('footer-sitemap'),
            };

            function updateContent() {
                const t = content[currentLang];

                // Navbar
                if (elementsToUpdate.appName) elementsToUpdate.appName.textContent = t.appName;
                if (elementsToUpdate.backButtonText) elementsToUpdate.backButtonText.textContent = t.nav.backButton;
                if (elementsToUpdate.navFeatures) elementsToUpdate.navFeatures.textContent = t.nav.features;
                if (elementsToUpdate.navRoles) elementsToUpdate.navRoles.textContent = t.nav.roles;
                if (elementsToUpdate.navContact) elementsToUpdate.navContact.textContent = t.nav.contact;
                if (elementsToUpdate.navProfile) elementsToUpdate.navProfile.innerHTML = `<i data-lucide="user" class="me-2"></i> <span id="user-display-name">${t.nav.profile}</span>`;
                if (elementsToUpdate.navLogout) elementsToUpdate.navLogout.innerHTML = `<i data-lucide="log-out" class="me-2"></i> ${t.nav.logout}`;
                if (elementsToUpdate.languageToggle) elementsToUpdate.languageToggle.textContent = currentLang === 'en' ? 'বাংলা' : 'English';

                // Dashboard Content
                if (elementsToUpdate.roleHeading) elementsToUpdate.roleHeading.textContent = t.dashboard.roleHeading;
                if (elementsToUpdate.roleDescription) elementsToUpdate.roleDescription.textContent = t.dashboard.roleDescription;

                if (elementsToUpdate.highProfileCasesHeading) elementsToUpdate.highProfileCasesHeading.textContent = t.dashboard.highProfileCasesHeading;
                if (elementsToUpdate.caseItem1) elementsToUpdate.caseItem1.textContent = t.dashboard.caseItem1;
                if (elementsToUpdate.caseStatus1) elementsToUpdate.caseStatus1.innerHTML = `স্থিতি: <span class="badge bg-danger">${t.dashboard.caseStatus1.split(': ')[1]}</span>`;
                if (elementsToUpdate.accessClassified1) elementsToUpdate.accessClassified1.innerHTML = `<i data-lucide="lock" class="me-1"></i> ${t.dashboard.accessClassified}`;
                if (elementsToUpdate.submitTribunalDoc1) elementsToUpdate.submitTribunalDoc1.innerHTML = `<i data-lucide="file-check" class="me-1"></i> ${t.dashboard.submitTribunalDoc}`;

                if (elementsToUpdate.caseItem2) elementsToUpdate.caseItem2.textContent = t.dashboard.caseItem2;
                if (elementsToUpdate.caseStatus2) elementsToUpdate.caseStatus2.innerHTML = `স্থিতি: <span class="badge bg-warning text-dark">${t.dashboard.caseStatus2.split(': ')[1]}</span>`;
                if (elementsToUpdate.accessClassified2) elementsToUpdate.accessClassified2.innerHTML = `<i data-lucide="lock" class="me-1"></i> ${t.dashboard.accessClassified}`;
                if (elementsToUpdate.submitTribunalDoc2) elementsToUpdate.submitTribunalDoc2.innerHTML = `<i data-lucide="file-check" class="me-1"></i> ${t.dashboard.submitTribunalDoc}`;

                if (elementsToUpdate.viewAllCasesButton) elementsToUpdate.viewAllCasesButton.innerHTML = `<i data-lucide="list-checks" class="me-2"></i> ${t.dashboard.viewAllCases}`;

                if (elementsToUpdate.agencyCollaborationHeading) elementsToUpdate.agencyCollaborationHeading.textContent = t.dashboard.agencyCollaborationHeading;
                if (elementsToUpdate.collaborationItem1) elementsToUpdate.collaborationItem1.textContent = t.dashboard.collaborationItem1;
                if (elementsToUpdate.collaborationSource1) elementsToUpdate.collaborationSource1.innerHTML = `উৎস: <span class="badge bg-primary">${t.dashboard.collaborationSource1.split(': ')[1]}</span>`;
                if (elementsToUpdate.reviewReport1) elementsToUpdate.reviewReport1.innerHTML = `<i data-lucide="eye" class="me-1"></i> ${t.dashboard.reviewReport}`;
                if (elementsToUpdate.approveReport1) elementsToUpdate.approveReport1.innerHTML = `<i data-lucide="check" class="me-1"></i> ${t.dashboard.approve}`;
                if (elementsToUpdate.collaborationItem2) elementsToUpdate.collaborationItem2.textContent = t.dashboard.collaborationItem2;
                if (elementsToUpdate.collaborationSource2) elementsToUpdate.collaborationSource2.innerHTML = `উৎস: <span class="badge bg-secondary">${t.dashboard.collaborationSource2.split(': ')[1]}</span>`;
                if (elementsToUpdate.reviewReport2) elementsToUpdate.reviewReport2.innerHTML = `<i data-lucide="eye" class="me-1"></i> ${t.dashboard.reviewReport}`;
                if (elementsToUpdate.approveReport2) elementsToUpdate.approveReport2.innerHTML = `<i data-lucide="check" class="me-1"></i> ${t.dashboard.approve}`;
                if (elementsToUpdate.upcomingTribunalHeading) elementsToUpdate.upcomingTribunalHeading.textContent = t.dashboard.upcomingTribunalHeading;
                if (elementsToUpdate.tribunalItem1) elementsToUpdate.tribunalItem1.textContent = t.dashboard.tribunalItem1;
                if (elementsToUpdate.tribunalDate1) elementsToUpdate.tribunalDate1.textContent = t.dashboard.tribunalDate1;
                if (elementsToUpdate.confirmTribunal1) elementsToUpdate.confirmTribunal1.innerHTML = `<i data-lucide="calendar-check" class="me-1"></i> ${t.dashboard.confirmAttendance}`;

                if (elementsToUpdate.otherInfoHeading) elementsToUpdate.otherInfoHeading.textContent = t.dashboard.otherInfoHeading;
                if (elementsToUpdate.otherInfo1) elementsToUpdate.otherInfo1.innerHTML = `<i data-lucide="info" class="me-2 text-primary-custom"></i> ${t.dashboard.otherInfo1}`;
                if (elementsToUpdate.otherInfo2) elementsToUpdate.otherInfo2.innerHTML = `<i data-lucide="info" class="me-2 text-primary-custom"></i> ${t.dashboard.otherInfo2}`;
                if (elementsToUpdate.otherInfo3) elementsToUpdate.otherInfo3.innerHTML = `<i data-lucide="info" class="me-2 text-primary-custom"></i> ${t.dashboard.otherInfo3}`;

                // Footer
                if (elementsToUpdate.currentYear) elementsToUpdate.currentYear.textContent = new Date().getFullYear();
                if (elementsToUpdate.footerCopyright) elementsToUpdate.footerCopyright.textContent = `© ${new Date().getFullYear()} ${t.footer.copyright}`;
                if (elementsToUpdate.footerPrivacy) elementsToUpdate.footerPrivacy.textContent = t.footer.privacyPolicy;
                if (elementsToUpdate.footerTerms) elementsToUpdate.footerTerms.textContent = t.footer.termsOfService;
                if (elementsToUpdate.footerSitemap) elementsToUpdate.footerSitemap.textContent = t.footer.sitemap;

                lucide.createIcons(); // Re-create Lucide icons after content update
            }
            document.getElementById('back-to-dashboard').addEventListener('click', () => {
                history.back();
            });

            // Placeholder for User ID and Name (in a real app, this would come from authentication)
            function setUserIdAndName() {
                const dummyUserName = "বিশেষ পাবলিক প্রসিকিউটর"; // Example dummy name (Bengali)

                if (elementsToUpdate.userDisplayName) {
                    elementsToUpdate.userDisplayName.textContent = dummyUserName;
                }
            }

            // Event listener for language toggle button
            const languageToggleBtn = document.getElementById('language-toggle');
            if (languageToggleBtn) {
                languageToggleBtn.addEventListener('click', () => {
                    currentLang = currentLang === 'en' ? 'bn' : 'en';
                    document.documentElement.lang = currentLang; // Update html lang attribute
                    updateContent();
                });
            }

            // Initial content load and set dummy user data
            updateContent();
            setUserIdAndName();

            // Add dummy click handlers for demonstration
            document.getElementById('access-classified-1').addEventListener('click', () => alert('Accessing classified materials for Case #SPP2025-001!'));
            document.getElementById('submit-tribunal-doc-1').addEventListener('click', () => alert('Submitting tribunal document for Case #SPP2025-001!'));
            document.getElementById('access-classified-2').addEventListener('click', () => alert('Accessing classified materials for Case #SPP2025-002!'));
            document.getElementById('submit-tribunal-doc-2').addEventListener('click', () => alert('Submitting tribunal document for Case #SPP2025-002!'));
            document.getElementById('view-all-cases-button').addEventListener('click', () => alert('Navigating to All High-Profile Cases page!'));
            document.getElementById('review-report-1').addEventListener('click', () => alert('Reviewing Digital Forensic Report for Case #SPP2025-001!'));
            document.getElementById('approve-report-1').addEventListener('click', () => alert('Approved Digital Forensic Report for Case #SPP2025-001!'));
            document.getElementById('review-report-2').addEventListener('click', () => alert('Reviewing Intelligence Brief for Case #SPP2025-002!'));
            document.getElementById('approve-report-2').addEventListener('click', () => alert('Approved Intelligence Brief for Case #SPP2025-002!'));
            document.getElementById('confirm-tribunal-1').addEventListener('click', () => alert('Confirmed attendance for tribunal hearing for Case #SPP2025-001!'));
        });
    </script>
</body>
</html>
