
<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 5/8/14
 * Time: 6:03 PM
 */

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true)
{
    $logged = 'in';
}
else
{
    $logged = 'out';
}
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en" />
    <title>Super Sleep: Log In</title>

    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

</head>
<body>
<div id="wrapper" class="container">
    <div id="header">
        <div id="logo">
            <h1><a href="#">Super Sleep</a></h1>
            <span>Get the sleep you deserve</span>
        </div>
    </div>


    <div id="page">
        <div id="content">
            <h2>Login</h2>

            <?php
            if (isset($_GET['error']))
            {
                echo '<p class="error">Error Logging In!</p>';
            }
            ?>
            <form action="includes/process_login.php" method="post" name="login_form">
                Email:     <input type="text" name="email" />
                Password: <input type="password"
                                 name="password"
                                 id="password"/>
                <input type="button"
                       value="Login"
                       onclick="formhash(this.form, this.form.password);" />
            </form>
            <p>If you don't have a login, please <a href="register.php">register</a></p>
            <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
            <p>You are currently logged <?php echo $logged ?>.</p>
</body>
</html>
</div>
<div id="sidebar">
    <div>
        <h2>Improve your sleep</h2>
        <ul class="style1">
            <li class = first><a href="register.php">Register</a></li>
            <li><a href='contact.php'>Contact Us</a></li>
        </ul>

    </div>
</div>
</div>
</div>
<div id="footer">
    <p>Developed by Tara Parker, Christopher Reynolds, Matthew Webster. Design by FreeCSSTemplates.org.
</div>
</div>
</body>
</html>
