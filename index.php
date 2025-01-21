<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body style="background-color: bisque; display: flex; flex-direction: column; align-items: center; justify-content: center;">

    <?php
    $server = "localhost";
    $username = "admin";
    $password = "pass";
    $database = "userDataBase";

    $connection = new mysqli($server, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $query = $connection->prepare("SELECT * FROM users WHERE logins = ?");
        $query->bind_param("s", $_POST['login']);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($_POST['haslo'] === $user['pass']) {
                echo "Zalogowano pomyślnie";
            } else {
                echo "Błędne hasło";
            }
        } else {
            echo "Nieprawidłowy login";
        }
        $query->close();
    }

    $connection->close();
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="login">Podaj Login:</label>
        <input type="text" name="login" id="login" required><br>
        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" id="haslo" required><br>
        <button type="submit">Zaloguj</button>
    </form>

</body>
</html>
