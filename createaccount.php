<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 3/3/14
 * Time: 3:48 PM
 */
?>

<html>
    <head>
        Create New Account
    </head>

    <!-- Display form for user to enter desired username and password -->
    <body>
        <form action="insert.php" method="post">
            Username: <input type="text" name="username">
            <br>
            Password: <input type="text" name="password">
            <br>
        <input type="submit">
        </form>
    <!-- Link to login page -->
        <a href="login.php">I already have an account</a>
    </body>
</html>
