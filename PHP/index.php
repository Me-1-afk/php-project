<<<<<<< HEAD
=======
<?php
    session_start();
    echo " main uodate";
    if (!isset($_SESSION["allusers"])) {
        $_SESSION["allusers"] = array();
    }
echo " second update";
    $error = '';
    $message = '';
echo " third update";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');

        if ($username === '') {
            $error = 'Please enter a username.';
        } else {
            $_SESSION['allusers'][] = $username;
            $message = 'Username saved.';
        }
    }
?>
>>>>>>> 45912a78cc9842ecc1fb0ca686205f2064b9d52a
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
<<<<<<< HEAD
        echo "Hello, World!";
        echo "<br>";
        echo "Hello, World!";
        echo "<br>";
        echo "Hello, World!";
        echo"te3dil";
        echo"<br>";
        echo "Hello,2 !";
    ?>
=======
        echo "stop editing!";

    ?>
<form method="post" action="">
    Username:<input type="text" name="username">
    <button type="submit">Submit</button>
</form>
    <h2>All Users:</h2>
    <h1>hsuada</h1>
    <ul>
        <?php
            if ($error) {
                echo "<p style=\"color:red;\">$error</p>";
            }

            if ($message) {
                echo "<p style=\"color:green;\">$message</p>";
            }
            foreach ($_SESSION["allusers"] as $user) {
                echo "<li>" . htmlspecialchars($user) . "</li>";
            }
        ?>
    </ul>
>>>>>>> 45912a78cc9842ecc1fb0ca686205f2064b9d52a
</body>
</html>