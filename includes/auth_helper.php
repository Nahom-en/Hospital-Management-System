<?php
/**
 * Authentication Helper Functions
 * This file handles session management and role-based access control (RBAC).
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Helper to get the correct path to the root directory
 */
function get_root_path() {
    // If the current script is in a subdirectory (like auth/, patient/, doctor/, admin/)
    // we need to go up one level. 
    // This is a simple check: if the directory name of the current script is not the root.
    $cwd = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $is_root = ($cwd == '/' || $cwd == '' || $cwd == '/hospital-system');
    return $is_root ? '' : '../';
}

/**
 * Ensures the user is logged in. If not, redirects to login page.
 */
function check_login() {
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        $prefix = get_root_path();
        header("Location: {$prefix}auth/login.php");
        exit();
    }
}

/**
 * Ensures the user has a specific role. If not, redirects to their own dashboard or login.
 */
function require_role($required_role) {
    check_login();
    
    if ($_SESSION['role_id'] != $required_role) {
        $prefix = get_root_path();
        switch ($_SESSION['role_id']) {
            case 1:
                header("Location: {$prefix}patient/dashboard.php");
                break;
            case 2:
                header("Location: {$prefix}doctor/dashboard.php");
                break;
            case 3:
                header("Location: {$prefix}admin/dashboard.php");
                break;
            default:
                header("Location: {$prefix}auth/login.php");
                break;
        }
        exit();
    }
}

/**
 * Redirects logged-in users away from auth pages (login/register)
 */
function redirect_if_logged_in() {
    if (isset($_SESSION['user_id']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $prefix = get_root_path();
        switch ($_SESSION['role_id']) {
            case 1:
                header("Location: {$prefix}patient/dashboard.php");
                break;
            case 2:
                header("Location: {$prefix}doctor/dashboard.php");
                break;
            case 3:
                header("Location: {$prefix}admin/dashboard.php");
                break;
            default:
                // No default needed, but good for safety
                break;
        }
        exit();
    }
}
