<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 5/8/14
 * Time: 1:38 PM
 */


include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

//custom session validator
sec_session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Super Sleep</title>
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
        <title>Super Sleep: Community Thread</title>

        <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />

    </head>
    <body>
    <div id="wrapper" class="container">
        <div id="header">
            <div id="logo">
                <h1><a href="index.php">Super Sleep</a></h1>
                <span><p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p></span>
            </div>
        </div>


        <div id="page">
            <div id="content">
                <h2>Community Thread</h2>
<?php
                //If the page number is set, then set the variable pagenum to the page number. Otherwise, set the page
                //number to 0.
                if(isset($_SESSION['pagenum']))
                {
                    $pagenum = $_SESSION['pagenum'];
                }
                else
                {
                    $_SESSION['pagenum'] = 0;
                    $pagenum = 0;
                }

                //Multiply the page number by 50 to get the entry number in the database.
                $entrynum = $pagenum * 50;

                //Get 50 comments from the database, order them by timestamp
                $result = mysqli_query($mysqli, "SELECT * FROM user_comments ORDER BY timestamp DESC LIMIT " . $entrynum . ",50");

                echo "<style>
						//.tableCSS { word-break: break-all; }
						td {max-width:400px;word-wrap:break-word;}
					</style>
					
					<table border='1' class='tableCSS'>
                    <tr>
                        <th>User</th>
                        <th>Time</th>
                        <th>Comment</th>

                    </tr>";

                    $index = 0;
                    //While there is more rows of data, output the row to the user.
                    while($row = mysqli_fetch_array($result))
                    {
                        $index = $index + 1;
                        echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['timestamp'] . "</td>";
                        echo "<td>" . $row['comment'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
?>
                <!-- Display the page number and navigation options, use the last and next page functions to navigate
                the database. -->
                Page number <?php echo $_SESSION['pagenum']; ?>
                <div id="controlmenu">
                    <div>
                        <?php if($_SESSION['pagenum'] > 0) : ?>
                        <u2><a href="user_thread_last_page.php">Previous Page</a></u2>
                        <?php endif; ?>
                        <?php if($index == 50) : ?>
                        <u2><a href="user_thread_next_page.php">Next Page</a></u2>
                        <?php endif; ?>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <!-- Text box for user to submit a comment to the community thread-->
                <h3>Submit a Comment:</h3>
                <form action="user_thread_submit.php" method="post">
                    <textarea rows="4" cols="50" maxlength="300" id="user_comment"name = "user_comment">Comments (limit 300 characters)</textarea>
                    <br>
                    <br>
                    <br>
                    <input type="submit"/>
                </form>


            </div>
            <div id="sidebar">
                <div>
                    <!-- Sidebar navigation menu -->
                    <h2>Menu</h2>
                    <ul class="style1">
                        <li class="first"><a href="data_entry.php">New Data</a></li>
                        <li><a href="view_statistics.php">View Past Data</a></li>
                        <li><a href="view_statistics_average.php">View Statistics</a></li>
                        <li><a href="view_graphs.php">View Graphs</a></li>
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
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>