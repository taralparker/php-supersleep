<?php
$name="Tara";
?>
<!----My name is <?php echo $name; ?>----->

<form name="form" action="" method="get">
    <label for="password">Password</label>
    <input type="text" name="password" id="password" value="">
    <br>
    <label for="passwordConfirm">Confirm Password</label>
    <input type="text" name="passwordConfirm" id="passwordConfirm" value="">
    <input type="submit" value="Change Password" >
</form>

<?php echo $_GET['password']; ?>
<?php echo $_GET['passwordConfirm']; ?>

<!-- modify a password

***Connecting with root seems dangerous!

 -->


<?php

//COMPARE PASSWORDS FIRST
if($password == $passwordConfirm)
{
	$con=mysqli_connect("localhost", "root", "" , "Super_Sleep");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	echo "login successful";
	//needs to modify, not insert (replace?)
	//mysqli_query($con,"REPLACE INTO login (name, password)
	//VALUES ('{$_GET['password']}', '{$_GET['passwordConfirm']}')") or die(mysqli_error($con));

	//mysqli_query($con,"SELECT * FROM login ");
	mysqli_close($con);
}
else echo "passwords did not match";

?>
