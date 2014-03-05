<!--
	Page compiled by Matthew Webster
	This page can be linked only after a successful login.
	1)if a user is not logged in, it should display an error
	2)it should allow a user to change their password
	3)it should allow a user to return to the main page-->



<!-- modify a password

***Connecting with root seems dangerous!

 -->


<?php

$oldUsername = $_POST['oldUsername'];
$passwordOld = $_POST['passwordOld'];
$passwordFirst = $_POST['password1'];
$passwordSecond = $_POST['password2'];

//COMPARE PASSWORDS
    if(strcasecmp($passwordFirst, $passwordSecond)==0)
    {
        //connect to the server
        $con=mysqli_connect("localhost", "root", "" , "super_sleep");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        echo "passwords matched!";

        //VERIFY USERNAME = OLD PASSWORD BEFORE UPDATING




        //update password - VARCHARs need to be surrounded in single quotes

        $sql = "UPDATE login SET password='$passwordFirst' WHERE username='$oldUsername'";

        //try command
        if(!mysqli_query($con,$sql))
        {
            die('sql error');
        }
        else echo "successful modification";

        //mysqli_query($con,"SELECT * FROM login ");


        mysqli_close($con);
    }
    else echo "passwords did not match\n";
?>
