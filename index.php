<?php
// Root index.php - Redirect to login or dashboard
require_once 'includes/auth_helper.php';

if (isset($_SESSION['user_id'])) {
    // If logged in, send to dashboard
    switch ($_SESSION['role_id']) {
        case 1:
            header("Location: patient/dashboard.php");
            break;
        case 2:
            header("Location: doctor/dashboard.php");
            break;
        case 3:
            header("Location: admin/dashboard.php");
            break;
        default:
            header("Location: auth/login.php");
            break;
    }
} else {
    // If not logged in, send to login
    header("Location: auth/login.php");
}
exit();
