<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secure Login: Protected Page</title>
    <link rel="stylesheet" href="styles/main.css" />
</head>
<body>
<?php
    if (login_check($mysqli) == true) :
        //If the user is logged in, then the constraint is set to be only the username and the last entry returned so
        //that the last entry for the current user is selected. The user is then redirected to "view_statistics.php",
        //where the constraint will be used to query the database.
        $_SESSION['constraint'] = "username='$_SESSION[username]' ORDER BY id DESC LIMIT 1";
        header('Location: ../view_statistics.php');
    else :
?>
    <p>
        <!--Otherwise output an error message.-->
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>