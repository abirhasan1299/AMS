<?php


if( isset($_SESSION['role']) && $_SESSION['role']=="admin"){
    echo ' <li class="nav-item ms-lg-3">
         <a class="btn btn-primary-custom d-flex align-items-center" href="admin/admin_dashboard.php" id="nav-login">
                <i data-lucide="log-in" class="me-2"></i>Dashboard
         </a>
        </li>';
}elseif(isset($_SESSION['role']) && $_SESSION['role']=="citizen"){
    echo ' <li class="nav-item ms-lg-3">
         <a class="btn btn-primary-custom d-flex align-items-center" href="citizen/citizen_dashboard.php" id="nav-login">
                <i data-lucide="log-in" class="me-2"></i>Dashboard
         </a>
        </li>';
}elseif(isset($_SESSION['role']) && $_SESSION['role']=="advocate") {
    echo ' <li class="nav-item ms-lg-3">
         <a class="btn btn-primary-custom d-flex align-items-center" href="advocate/advocate-dashboard.php" id="nav-login">
                <i data-lucide="log-in" class="me-2"></i>Dashboard
         </a>
        </li>';
}

?>