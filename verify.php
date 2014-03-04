<?php
$con=mysqli_connect("localhost", "root", "" , "Super_Sleep");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username_submit = $_REQUEST[username];
$password_submit = $_REQUEST[password];

if(mysqli_query($con,"SELECT username FROM login WHERE username=$username_submit")
    and mysqli_query($con,"SELECT password FROM login WHERE password=$password_submit"))
{
    //Replace with account homepage
    $url = 'manageAccount.html';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
else
{
    $url = 'login_fail.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}

mysqli_close($con);
?>