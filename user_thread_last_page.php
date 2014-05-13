<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if (login_check($mysqli) == true) :
    //If the user is logged in and there is a previous page, then decrease the page number.
    if($_SESSION['pagenum'] > 0)
    {
        $_SESSION['pagenum'] = $_SESSION['pagenum'] - 1;
    }
    else
    {
        $_SESSION['pagenum'] = 0;
    }
    header('Location: ../user_thread.php');
else :
    ?>
    <p>
        <!--Otherwise output an error message.-->
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>