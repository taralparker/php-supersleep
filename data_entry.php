<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Template: Tara
 * Date: 4/1/14
 * Time: 6:00 PM
 */

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Super Sleep Journal</title>
    <script>
    </script>
    <link rel="stylesheet" href="styles/main.css" />
</head>
<body>
<?php if (login_check($mysqli) == true) : ?>
    <html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta charset="UTF-8" />
			<meta name="google" content="notranslate">
			<meta http-equiv="Content-Language" content="en" />
			<title>Super Sleep</title>

			<script type="text/javascript" src="jquery-1.7.1.min.js"></script>

			<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
			<link href="default.css" rel="stylesheet" type="text/css" media="all" />

		</head>
		<body>
			<div id="wrapper" class="container">
				<div id="header">
					<div id="logo">
						<h1><a href="#">Super Sleep</a></h1>
						<span><p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p></span>
					</div>
				</div>
				<div id="page">
					<div id="content">

						<form action="data_submit.php" method="post">
							Month: 
							<select id="month" name="month">
									<option value=1>January</option>
									<option value=2>February</option>
									<option value=3>March</option>
									<option value=4>April</option>
									<option value=5>May</option>
									<option value=6>June</option>
									<option value=7>July</option>
									<option value=8>August</option>
									<option value=9>September</option>
									<option value=10>October</option>
									<option value=11>November</option>
									<option value=12>December</option>
							</select>    
								
							<br>
							<!-- needs to check how many days in the month -->
							Day: 
							<select id="day" name="day">  
								<?php
									for ($day=1; $day<=31; $day++)
									{
										?>
											<option value="<?php echo $day;?>"><?php echo $day;?></option>
										<?php
									}
								?>
							</select>
							<br>
							Year: 
							<select id="year" name="year">
								<?php
									for ($year=2014; $year>=1980; $year--)
									{
										?>
											<option value="<?php echo $year;?>"><?php echo $year;?></option>
										<?php
									}
								?>
							</select>
							<br>
							Sleep Start Time:
							<br>
							Time: 
							<select id="hour" name="hour">
								<?php
									for ($hour=12; $hour>=1; $hour--)
									{
										?>
											<option value="<?php echo $hour;?>"><?php echo $hour;?></option>
										<?php
									}
								?>
							</select>
							
							: 
							<select id="minute" name="minute">
								<?php
									for ($minute=0; $minute<60; $minute+=5)
									{
										?>
											<option value="<?php echo $minute;?>"><?php echo $minute;?></option>
										<?php
									}
								?>
							</select>
							
							<select id="ampm" name="ampm">
								<option value="pm">PM</option>
								<option value="am">AM</option>
							</select>
							<br>
							Hours Slept: 
							<select id="hoursslept" name="hoursslept">
								<?php
									for ($hoursslept=.25; $hoursslept<=24; $hoursslept+=.25)
									{
										?>
											<option value="<?php echo $hoursslept;?>"><?php echo $hoursslept;?></option>
										<?php
									}
								?>
							</select>
							<br>
							<textarea rows="4" cols="50" maxlength="300" id="journal"name = "journal">Sleep Comments (limit 300 characters)</textarea>
							<br>
							<br>
							<br>
							<input type="submit"/>
						</form>
					</div>
					<div id="sidebar">
						<div>
							<h2>Menu</h2>
							<ul class="style1">
								<li class="first"><a href="#">New Data</a></li>
								<li><a href="view_statistics.php">View Statistics</a></li>
								<li><a href="view_graphs.php">View Graphs</a></li>
								<li><a href="#">Post to Community Thread</a></li>
								<li><a href="includes/logout.php">Logout</a></li>
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
<?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>
