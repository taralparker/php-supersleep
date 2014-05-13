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
    if (login_check($mysqli) == true) :
        //If the user is logged in, then the constraint is set to be only the username so that all data is selected.
        //The user is then redirected to "view_statistics.php", where the constraint will be used to query the database.
        $_SESSION['constraint'] = "username='$_SESSION[username]' ORDER BY id DESC";
        header('Location: ../view_statistics.php');
    else :
?>
    <p>
        <!--Otherwise an error message is output.-->
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>