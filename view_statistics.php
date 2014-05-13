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
<!-- If the user is logged in then load the page.-->
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
                <p>
                <?php
		    //If there is no constraint set, then open the initial page.
                    if(!isset($_SESSION['constraint']))
                    {
                        //If the delerr variable is set, then post an error message to the user along with the header.
                        //Otherwise just post the header.
                        if(isset($_SESSION['delerr']))
                        {
                            $_SESSION['delerr'] = NULL;
                            echo "<h2> Select data to view. </h2>";
                            echo "<span class='error'>The selected entry could not be deleted.</span>";
                        }
                        else
                        {
                            echo "<h2> Select data to view. </h2>";
                        }
                    }
                    else
                    {
			            //Get constraint, and use it to query the database.
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
                        <th>Delete Entry</th>
                        </tr>";

			            //While there is more rows of data, output the row to the user. Also output a delete button so
                        //the user may delete entries.
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
                            echo "<td>";
                            echo "<form action='delete_entry.php' method='post'>";
                            echo "<input type='hidden' name='id' value=" . $row['id'] . ">";
                            echo "<input type='submit' name='submit' value='Delete'>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                ?>
                </p>
                <p></p>
                <div id="controlmenu">
                    <div>
                        <u2><a href="view_statistics_all.php">All Data</a></u2>
                        <u2><a href="view_statistics_past_seven.php">Past 7 Entries</a></u2>
                        <u2><a href="view_statistics_last_entry.php">Last Entry</a></u2>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div>
                    <h2>Menu</h2>
                    <ul class="style1">
			<!-- Selection menu, which allows the user to select which entries to view. -->
                        <li class="first"><a href="data_entry.php">New Data</a></li>
                        <li><a href="view_statistics_average.php">View Statistics</a></li>
                        <li><a href="view_graphs.php">View Graphs</a></li>
                        <li><a href="user_thread.php">Post to Community Thread</a></li>
                        <li><a href="account.php">Home</a></li>
                        <li><a href="includes/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="footer">
            <p>Developed by Tara Parker, Christopher Reynolds, Matthew Webster. Design by FreeCSSTemplates.org.
        </div>
    </div>
    </body>
    </html>
<?php else : ?>
    <p>
	<!--Otherwise an error message is output.-->
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>