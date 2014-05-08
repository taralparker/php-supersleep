<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 3/19/14
 * Time: 3:33 PM
 */

include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en" />
    <title>Super Sleep: Registration</title>

    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />

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
            <h2>Register</h2>
            <?php
            if (!empty($error_msg))
            {
                echo $error_msg;
            }
            ?>
            <ul>
                <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
                <li>Emails must have a valid email format</li>
                <li>Passwords must be at least 6 characters long</li>
                <li>Passwords must contain
                    <ul>
                        <li>At least one upper case letter (A..Z)</li>
                        <li>At least one lower case letter (a..z)</li>
                        <li>At least one number (0..9)</li>
                    </ul>
                </li>
                <li>Your password and confirmation must match exactly</li>
                <br>
            </ul>
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                  method="post"
                  name="registration_form">
                Username: <input type='text'
                                 name='username'
                                 id='username' /><br>
                Email: <input type="text" name="email" id="email" /><br>
                Password: <input type="password"
                                 name="password"
                                 id="password"/><br>
                Confirm password: <input type="password"
                                         name="confirmpwd"
                                         id="confirmpwd" /><br>
                <input type="button"
                       value="Register"
                       onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" />
            </form>
            <p>Return to the <a href="login.php">login page</a>.</p>
        </div>
        <div id="sidebar">
            <div>
                <h2>Improve your sleep</h2>
                <ul class="style1">
                    <li class="first"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href='contact.php'>Contact Us</a></li>
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
