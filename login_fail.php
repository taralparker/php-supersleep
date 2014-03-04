<?php
$name="Chris";
?>
<!----My name is <?php echo $name; ?>----->

<html>
    <head>
        Login Failed!
        <br>
    </head>

    <body>
        <form action="verify.php" method="post">
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">
            <br>
            <input type="submit" value="Login">
        </form>

        <a href="CreateAccount.php">I do not have an account</a>
    </body>
</html>