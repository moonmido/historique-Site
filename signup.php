<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="1; url=index.php">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php

// Database connection
$con = new mysqli("localhost", "root", "", "historique_site");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Retrieve form inputs
$name = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// Check if password and confirm password match
if (strcmp($password, $confirmpassword) == 0) {
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO signup (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        // Success, redirect to the index page
        echo "<script>
            swal({
                title: 'Success!',
                text: 'Your account has been created!',
                icon: 'success',
                timer: 2000,
                buttons: false
            }).then(() => {
                window.location.href = 'index.html';
            });
        </script>";
    } else {
        // Query execution failed
        echo "<script>
            swal({
                title: 'Error!',
                text: 'Failed to create account, please try again later.',
                icon: 'error',
            });
        </script>";
    }

    $stmt->close();

} else {
    // Passwords do not match
    echo "<script>
        swal({
            title: 'Error!',
            text: 'Passwords do not match. Please try again.',
            icon: 'error',
        });
    </script>";
}

// Close the database connection
$con->close();
?>

</body>
</html>









</body>
</html>
