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
        $month = date("m");
        $day = date("j");
        $year = date("Y");

        $dates = array();

        $dateinterval = new DateInterval('P1D');
        $date = new DateTime();
        $date->setDate($year,$month,$day);
        $date->sub($dateinterval);
        $date->sub($dateinterval);

        for($i=0;$i<7;$i++)
        {
            $date->sub($dateinterval);
            $months[$i] = $date->format('F');
            $days[$i] = $date->format('j');
            $years[$i] = $date->format('Y');
        }

        $monthcheck = "(month='$months[0]' or month='$months[1]' or month='$months[2]' or month='$months[3]' or month='$months[4]' or month='$months[5]' or month='$months[6]')";
        $daycheck = "(day='$days[0]' or day='$days[1]' or day='$days[2]' or day='$days[3]' or day='$days[4]' or day='$days[5]' or day='$days[6]')";
        $yearcheck = "(year='$years[0]' or year='$years[1]' or year='$years[2]' or year='$years[3]' or year='$years[4]' or year='$years[5]' or year='$years[6]')";

        $_SESSION['constraint'] = "(username='$_SESSION[username]' and " . $monthcheck . " and " . $daycheck . " and " . $yearcheck . " )";
        header('Location: ../view_statistics.php');
    else :
?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>

