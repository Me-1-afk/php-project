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
>>>>>>> 2e660d44ac1cdef34dca14080d265d7bc1361153
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        echo "Hello, World!";
        echo "<br>";
        echo "Hello, World!";
        echo "<br>";
        echo "Hello, World!";
        echo"te3dil";
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
                foreach ($users as $user) {
                echo "<li>" . htmlspecialchars($user) . "</li>";
            }
        ?>
    </ul>
    
<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>
</body>
</html>