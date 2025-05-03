<?php
// Simulated logging for awareness only — no real credentials are stored
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);

// Log fake attempt (no real storage)
file_put_contents("phishing_log.txt", "Simulated Email: $email | Simulated Password: $pass\n", FILE_APPEND);

// Redirect to a warning/awareness page
header('Location: warning.html');
exit();
?>
