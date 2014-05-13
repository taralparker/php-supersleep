<?php
/**
 * Created by PhpStorm.
 * User: Tara, Matt
 * Date: 5/8/14
 * Time: 5:39 PM
 */
 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
 
 
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en" />
    <title>Super Sleep: Success</title>

    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper" class="container">
    <div id="header">
        <div id="logo">
            <h1><a href="index.php">Super Sleep</a></h1>
            <span>Get the sleep you deserve</span>
        </div>
    </div>


    <div id="page">
        <div id="content">
            <!-- Message indicating the contact us message was recieved -->
            <h2>Success</h2>
            <p> Thank you for contacting Super Sleep. We will be in touch with you very soon. </p>
            <p></p>
        </div>
        <div id="sidebar">
            <div>
                <!-- Sidebar navigation menu -->
                <h2>Improve your sleep</h2>
                <ul class="style1">
                <?php if (login_check($mysqli) == false) : ?>
                    <li class="first"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
				<?php else : ?>
					<li class="first"><a href="account.php">Home</a></li>
					<li><a href="data_entry.php">New Data</a></li>
					<li><a href="view_statistics.php">View Past Data</a></li>
					<li><a href="view_statistics_average.php">View Statistics</a></li>
					<li><a href="view_graphs.php">View Graphs</a></li>
					<li><a href="user_thread.php">Post to Community Thread</a></li>
					<li><a href="includes/logout.php">Logout</a></li>
				<?php endif; ?>
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
