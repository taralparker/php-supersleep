<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 3/3/14
 * Time: 3:52 PM
 */

// Attempt to connect to the database Super_Sleep
$con=mysqli_connect("localhost", "root", "" , "Super_Sleep");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Attempt to add the username and password to the login table in Super_Sleep
$sql="INSERT INTO login (username, password)
VALUES
('$_POST[username]','$_POST[password]')";

// Check for errors including duplicate entries (e.g. an attempt to create a username that is already in use)
if (!mysqli_query($con,$sql))
{
    die('Username is over the 15 character max or already taken. Please try again.');
}

// If the username and password are valid, confirm and send to user profile.
echo "User added";

mysqli_close($con);
?>

<html>
    <br>
    <!--TO BE UPDATED TO THE MATT'S PROFILE PAGE-->
    <a href="userprofile.php">Go to Profile</a>
</html>
