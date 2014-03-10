<?php
//Attempt connection to Super_Sleep database.
$con=mysqli_connect("localhost", "root", "" , "super_sleep");

// Check if the connection attempt was successful.
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Search the database for an entry with the entered username and corresponding password.
$username_query = mysqli_query($con,"SELECT username,password FROM login WHERE username='$_POST[username]'");

//Get the results of the query into an array.
$row = mysqli_fetch_array($username_query);

//If there is an entry that fits the criteria, then go to the User Profile page, else go to the Login Failed page.
if(strcasecmp($_POST[password],$row[1])==0)
{
    $url = 'userprofile.html';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
else
{
    $url = 'loginfail.html';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';;
}

//Close the database connection.
mysqli_close($con);
?>