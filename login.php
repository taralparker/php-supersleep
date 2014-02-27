<?php
$name="Tara";
?>
<!----My name is <?php echo $name; ?>----->

<form name="form" action="" method="get">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" value="">
    <input type="submit" value="Create Account" >
</form>

<?php echo $_GET['username']; ?>
<?php echo $_GET['password']; ?>

Create new account
<?php
$con=mysqli_connect("localhost", "root", "" , "Super_Sleep");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO login (username, password)
VALUES ('{$_GET['username']}', '{$_GET['password']}')") or die(mysqli_error($con));

mysqli_query($con,"SELECT * FROM login ");

mysqli_close($con);
?>
