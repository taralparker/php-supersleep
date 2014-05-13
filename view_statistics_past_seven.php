<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Super Sleep: View Statistics</title>
    <link rel="stylesheet" href="styles/main.css" />
</head>
<body>
<?php
    //If the user is logged in, then the constraint is set to be the past seven entries. The user is then redirected to
    //"view_statistics.php", where the constraint will be used to query the database.
    if (login_check($mysqli) == true) :
        //Let the constraint limit the entries to the last seven in the table.
        $_SESSION['constraint'] = "username='$_SESSION[username]' ORDER BY id DESC LIMIT 7";
        header('Location: ../view_statistics.php');
    else :
?>
    <p>
        <!--Otherwise output and error message.-->
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>

