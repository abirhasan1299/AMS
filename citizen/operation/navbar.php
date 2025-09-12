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
                    <a class="btn btn-outline-secondary d-flex align-items-center" id="back-to-dashboard" role="button" href="citizen_dashboard.php">
                        <i data-lucide="arrow-left" class="me-2"></i> <span id="back-button-text">Dashboard</span>
                    </a>
                </li>
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
                    <a class="btn btn-primary-custom d-flex align-items-center" href="operation/logout.php" id="nav-logout" data-i18n-key="navLogout">
                        <i data-lucide="log-out" class="me-2"></i> Logout
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