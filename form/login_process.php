<?php
session_start();

// Define an array of valid usernames and passwords (for demonstration purposes)
$valid_credentials = array(
    "user1" => "password",
    "user2" => "password",
    "user3" => "password"
);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Check if the entered credentials match any valid combination
    foreach ($valid_credentials as $username => $password) {
        if ($entered_username === $username && $entered_password === $password) {
            // Successful login
            $_SESSION['username'] = $entered_username;
            header("Location: welcome.php");
            exit();
        }
    }

    // Invalid credentials
    echo "Invalid username or password. Please try again.";
    // header("Location: errorLogin.php");
}
?>
