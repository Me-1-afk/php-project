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