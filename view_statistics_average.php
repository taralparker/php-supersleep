
<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Template: Tara
 * Date: 4/30/14
 * Time: 4:00 PM
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
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="stylesheet" href="styles/main.css" />
</head>
<body>
<!--verifies the user is logged in -->
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
					<h2>Sleep Statistics</h2>
					
					<?php
						/** counts the amount of entries in the database for the selected user*/
						$query = "SELECT COUNT(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ";
						//querys the command
						$result = $mysqli->query($query);
						//gets the result, and stores
						$row = $result->fetch_array(); 
						$totalRows = $row;
						
						//-1 to indicate the varible has not been set.
						$sevenEntryAvgSleepTime = -1;
						$sevenEntryMinSleepTime = -1;
						$sevenEntryMaxSleepTime = -1;
						$sevenEntryAvgFellSleepTime = -1;
						$thirtyEntryAvgSleepTime = -1;
						$thirtyEntryMinSleepTime = -1;
						$thirtyEntryMaxSleepTime = -1;
						$thirtyEntryAvgFellSleepTime = -1;
						
						//if there are more then 7 entries, calculate the 7-entry dependent commands.
						if( $totalRows['COUNT(hoursSlept)'] >=7)
						{
							$query = "SELECT AVG(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 7";
							$result = $mysqli->query($query);
							$row = $result->fetch_array(); 
							$sevenEntryAvgSleepTime = $row;
							
							$query = "SELECT MIN(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 7";
							$result = $mysqli->query($query);
							$row = $result->fetch_array(); 
							$sevenEntryMinSleepTime = $row;
							
							$query = "SELECT MAX(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 7";
							$result = $mysqli->query($query);
							$row = $result->fetch_array(); 
							$sevenEntryMaxSleepTime = $row;
						
						}
						//if there are more then 30 entries, calculate the 30-entry dependent commands.
						if( $totalRows['COUNT(hoursSlept)'] >=30)
						{
							$query = "SELECT AVG(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 30";
							$result = $mysqli->query($query);
							$row = $result->fetch_array(); 
							$thirtyEntryAvgSleepTime = $row;
							
							$query = "SELECT MIN(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 30";
							$result = $mysqli->query($query);
							$row = $result->fetch_array(); 
							$thirtyEntryMinSleepTime = $row;
							
							$query = "SELECT MAX(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 30";
							$result = $mysqli->query($query);
							$row = $result->fetch_array();  
							$thirtyEntryMaxSleepTime = $row;
						}
						

					?>
					
					<style>
					td
					{
					padding:5px;
					}
					</style>
					
					
					<center> <!--print the table containing the statistics information -->
					<table border="1"  style="width:300px">
						<tr>
							<td></td>
							<td><b>Value</b></td>
						</tr>
						<tr>
							<td><b>Total Sleep Entries</b></td>
							<td>
								<?php if($totalRows!=-1) //if the value isn't -1 (it was calculated) then display it
								{ echo $totalRows['COUNT(hoursSlept)'];} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Seven Entry Average</b></td>
							<td>
								<?php if($sevenEntryAvgSleepTime!=-1)
								{ echo $sevenEntryAvgSleepTime['AVG(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Seven Entry Minimum</b></td>
							<td>
								<?php if($sevenEntryMinSleepTime!=-1)
								{ echo $sevenEntryMinSleepTime['MIN(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Seven Entry Maximum</b></td>
							<td>
								<?php if($sevenEntryMaxSleepTime!=-1)
								{ echo $sevenEntryMaxSleepTime['MAX(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Seven Entry Range</b></td>
							<td>
								<?php if($sevenEntryMinSleepTime!=-1 and $sevenEntryMaxSleepTime!=-1)
								{ echo $sevenEntryMaxSleepTime['MAX(hoursSlept)']-$sevenEntryMinSleepTime['MIN(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Thirty Entry Average</b></td>
							<td>
								<?php if($thirtyEntryAvgSleepTime!=-1)
								{ echo $thirtyEntryAvgSleepTime['AVG(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Thirty Entry Minimum</b></td>
							<td>
								<?php if($thirtyEntryMinSleepTime!=-1)
								{ echo $thirtyEntryMinSleepTime['MIN(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Thirty Entry Maximum</b></td>
							<td>
								<?php if($thirtyEntryMaxSleepTime!=-1)
								{ echo $thirtyEntryMaxSleepTime['MAX(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
						<tr>
							<td><b>Thirty Entry Range</b></td>
							<td>
								<?php if($thirtyEntryMinSleepTime!=-1 and $thirtyEntryMaxSleepTime!=-1)
								{ echo $thirtyEntryMaxSleepTime['MAX(hoursSlept)']-$thirtyEntryMinSleepTime['MIN(hoursSlept)'] . " hours";} else echo "Not enough Entries"; ?>
							</td>
						</tr>
					</table>
					</center>
					
					</div>
					<div id="sidebar">
						<div>
							<h2>Menu</h2>
							<ul class="style1">
								<li class="first"><a href="data_entry.php">New Data</a></li>
								<li><a href="view_statistics.php">View Past Data</a></li>
								<li><a href="view_graphs.php">View Graphs</a></li>
								<li><a href="user_thread.php">Post to Community Thread</a></li>
								<li><a href="account.php">Home</a></li>
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
