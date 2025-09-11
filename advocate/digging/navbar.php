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
                    <a class="btn btn-outline-primary d-flex align-items-center" href="advocate_profile.php" id="nav-profile">
                        <i data-lucide="user" class="me-2"></i> <span id="user-display-name">ব্যবহারকারী</span>
                    </a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-primary-custom d-flex align-items-center" href="operation/logout.php" id="nav-logout">
                        <i data-lucide="log-out" class="me-2"></i> লগআউট
                    </a>
                </li>
                <li class="nav-item ms-lg-4">
                    <div id="toggle"></div>
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