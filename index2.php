<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";


$enteredUsername = "user123";
$enteredPassword = "password123";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username='$enteredUsername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashedPasswordFromDatabase = $row['password'];

    if (password_verify($enteredPassword, $hashedPasswordFromDatabase)) {
        echo "Logowanie udane!";
    } else {
        echo "Błędne hasło.";
    }
} else {
    echo "Użytkownik nie istnieje.";
}

$conn->close();

?>
