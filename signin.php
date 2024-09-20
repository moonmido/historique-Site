<?php
session_start();

// Check if email and password are posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create connection to the database
    $con = new mysqli("localhost", "root", "", "historique_site");

    // Check for connection error
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare SQL statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the email exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the entered password with the stored hash
        if (password_verify($password, $user['password'])) {
            // Store user details in session
            $_SESSION['email'] = $user['email'];

            // Redirect to index.php (not index.html, because you'll use PHP)
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password!";
        }
    } else {
        // No user found with that email
        echo "No user found with that email!";
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>


