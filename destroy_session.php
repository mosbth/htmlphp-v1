<?php
// Example on destroying the session, taken from the manual
// http://php.net/manual/en/function.session-destroy.php
error_reporting(-1); 

// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_name($_GET['name']);
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
echo "<p>Destroying session '{$_GET['name']}' with id=" . session_id();
session_destroy();

// Start a new session with a new id
session_name($_GET['name']);
session_start();
session_regenerate_id();

echo "<p>New sessionid=" . session_id();
echo "<p><a href='{$_SERVER['HTTP_REFERER']}'>Go back to the page where you came from</a>";

?>
