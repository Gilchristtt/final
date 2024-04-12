<?php
// Check if the user is logged in (you need to implement your own logic for this)
$userLoggedIn = true; // Change this to your actual logic

// If the user is logged in, redirect to services.html
if ($userLoggedIn) {
    header("Location: services.html");
    exit;
} else {
    // If not logged in, check if the user has an account
    $userHasAccount = true; // Change this to your actual logic

    // If the user has an account, redirect to login.html
    if ($userHasAccount) {
        header("Location: login.html");
        exit;
    } else {
        // If not logged in and doesn't have an account, redirect to register.html
        header("Location: register.html");
        exit;
    }
}
?>
