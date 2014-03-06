<!--
	Page compiled by Matthew Webster
-->

<?php

$oldUsername = $_POST['usernameField'];
$passwordOld = $_POST['oldPassword'];
$passwordFirst = $_POST['password1'];
$passwordSecond = $_POST['password2'];

//verify new passwords match.
    if(strcasecmp($passwordFirst, $passwordSecond)==0)
    {
        //connect to the server
        $con=mysqli_connect("localhost", "root", "" , "super_sleep");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        //echo "passwords matched!";

        //Search the database for an entry with the entered username and corresponding password.
        $username_query = mysqli_query($con,"SELECT username,password FROM login WHERE username='$oldUsername'");

        //Get the results of the query into an array.
        $row = mysqli_fetch_array($username_query);

        //If there is an entry that fits the criteria, then go to the Manage Account page, else go to the Login Failed page.

        if(strcasecmp($passwordOld,$row[1])==0)
        {
            $sql = "UPDATE login SET password='$passwordFirst' WHERE username='$oldUsername'";

            //try command
            if(!mysqli_query($con,$sql))
            {
                die('sql error');
            }
            else echo "Password Changed Successfully.";
        }
        else echo "Username and Password did not match.";
		
        //close database connection
        mysqli_close($con);
    }
    else echo "New Passwords did not match.";
?>
