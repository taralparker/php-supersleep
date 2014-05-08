<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 3/19/14
 * Time: 3:33 PM
 */

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en" />
    <title>Super Sleep: Contact Us</title>

    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper" class="container">
    <div id="header">
        <div id="logo">
            <h1><a href="#">Super Sleep</a></h1>
            <span>Contact Us</span>
        </div>
    </div>


    <div id="page">
        <div id="content">
            <h2></h2>
            <form name="htmlform" method="post" action="contact_submit.php">
                <table width="450px">
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="first_name">First Name *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="first_name" maxlength="50" size="30">
                        </td>
                    </tr>

                    <tr>
                        <td valign="top"">
                        <label for="last_name">Last Name *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="last_name" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Email Address *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="email" maxlength="80" size="30">
                        </td>

                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="telephone">Telephone Number</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="telephone" maxlength="30" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="comments">Comments *</label>
                        </td>
                        <td valign="top">
                            <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
            <p></p>
        </div>
        <div id="sidebar">
            <div>
                <h2>Improve your sleep</h2>
                <ul class="style1">
                    <li class="first"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
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
