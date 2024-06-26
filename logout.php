<?php
// Starts the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the logout has been confirmed
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_destroy();  // Destroy the session data
        header("Location: login.html");  // Redirect to login page after logout
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#logoutModal').modal('show'); // Automatically show the logout modal

        window.confirmLogout = function() {
            window.location.href = '?action=logout'; // Redirect to self with logout action
        };
    });
</script>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure! You want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="confirmLogout()">Logout</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
