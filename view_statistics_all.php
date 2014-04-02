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
        $_SESSION['constraint'] = "username='$_SESSION[username]'";
        header('Location: ../view_statistics.php');
    else :
?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>