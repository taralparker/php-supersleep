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

include 'graph_create_past_30.php';

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
        <title>Super Sleep</title>

        <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />

    </head>
    <body>
    <div id="wrapper" class="container">
        <div id="header">
            <div id="logo">
                <h1><a href="#">Super Sleep</a></h1>
                <span><p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p></span>
            </div>
        </div>


        <div id="page">
            <div id="content">
                <h2>Past 7 days</h2>
                <p><img src="generated_graphs/past30entries.png" alt="Sleep Graph" width="525" height="285"></p>
                <p></p>
            </div>
            <div id="sidebar">
                <div>
                    <h2>Menu</h2>
                    <ul class="style1">
                        <li class="first"><a href="data_entry.php">New Data</a></li>
                        <li><a href="view_graphs.php">View Past 7 Entries</a></li>
                        <li><a href="view_graphs_30.php">View Past 30 Entries</a></li>
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