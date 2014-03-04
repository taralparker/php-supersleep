<?php
//Attempt connection to Super_Sleep database.
$con=mysqli_connect("localhost", "root", "" , "Super_Sleep");

// Check if the connection attempt was successful.
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Search the database for an entry with the entered username and corresponding password.
$submission = mysqli_query($con,"SELECT username, password FROM login
WHERE username=$_POST[username] and password = $_POST[password]");

//If there is an entry that fits the criteria, then go to the Manage Account page, else go to the Login Failed page.
if($submission)
{
    $url = 'manageAccount.html';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
else
{
    $url = 'login_fail.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}

//Close the database connection.
mysqli_close($con);
?>