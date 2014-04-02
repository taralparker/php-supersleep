<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 3/19/14
 * Time: 3:39 PM
 */

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
<?php if (login_check($mysqli) == true) : ?>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="UTF-8" />
        <meta name="google" content="notranslate">
        <meta http-equiv="Content-Language" content="en" />
        <title></title>

        <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />

    </head>
    <body>
    <div id="wrapper" class="container">
        <div id="header">
            <div id="logo">
                <h1><a href="#">Super Sleep</a></h1>
                <span><p> <?php echo htmlentities($_SESSION['username']); ?>'s Data</p></span>
            </div>
        </div>


        <div id="page">
            <div id="content">
                <!-- <h2>Past 7 days</h2> -->
                <p>
                <?php
                    if(!isset($_SESSION['constraint']))
                    {
                        echo "<h2> Select data to view. </h2>";
                    }
                    else
                    {
                        $constraint = $_SESSION['constraint'];
                        $_SESSION['constraint'] = NULL;
                        $result = mysqli_query($mysqli, "SELECT * FROM sleep_data WHERE " . $constraint);
                        echo "<table border='1'>
                        <tr>
                        <th>Month</th>
                        <th>Day</th>
                        <th>Year</th>
                        <th>Hour Fell Asleep</th>
                        <th>Minute Fell Asleep</th>
                        <th>AM/PM</th>
                        <th>Number of Hours Slept</th>
                        <th>Comment on Sleep</th>
                        </tr>";

                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['month'] . "</td>";
                            echo "<td>" . $row['day'] . "</td>";
                            echo "<td>" . $row['year'] . "</td>";
                            echo "<td>" . $row['hour'] . "</td>";
                            echo "<td>" . $row['min'] . "</td>";
                            echo "<td>" . $row['ampm'] . "</td>";
                            echo "<td>" . $row['hoursSlept'] . "</td>";
                            echo "<td>" . $row['comment'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                ?>
                </p>
                <p></p>
            </div>
            <div id="sidebar">
                <div>
                    <h2>Menu</h2>
                    <ul class="style1">
                        <li class="first"><a href="view_statistics_all.php">All Data</a></li>
                        <li><a href="view_statistics_past_seven.php">Entries in the Past 7 Days</a></li>
                        <li><a href="view_statistics_last_entry.php">Last Entry</a></li>
                        <li><a href="account.php">Home</a></li>
                        <li><a href="includes/logout.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <div id="footer">
            <p>Developed by Tara Parker, Christopher Reynolds, Matthew Webster.
        </div>
    </div>
    </body>
    </html>
<?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>