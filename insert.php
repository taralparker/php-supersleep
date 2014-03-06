<?php
/**
 * Author: Tara
 * Date: 3/3/14
 * Time: 3:52 PM
 */

// Attempt to connect to the database Super_Sleep
$con=mysqli_connect("localhost", "root", "" , "super_sleep");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Attempt to add the username and password to the login table in super_sleep
$sql="INSERT INTO login (username, password)
VALUES
('$_POST[username]','$_POST[password]')";

// Check for errors including duplicate entries (e.g. an attempt to create a username that is already in use)
if (!mysqli_query($con,$sql))
{
    echo "<a href=createaccount.html>Create New Account</a><br>";
    die('Username is already taken. Please try again.');

}

// If the username and password are valid, confirm and send to user profile.
echo "User added";

mysqli_close($con);
?>
<html>
    <br>
    <a href="userprofile.html">Go to Profile</a>
</html>
