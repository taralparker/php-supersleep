
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
						$query = "SELECT COUNT(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ";
						$result = $mysqli->query($query);
						$row = $result->fetch_array(); 
						$totalRows = $row;
						
						$sevenEntryAvgSleepTime = -1;
						$sevenEntryMinSleepTime = -1;
						$sevenEntryMaxSleepTime = -1;
						$sevenEntryAvgFellSleepTime = -1;
						$thirtyEntryAvgSleepTime = -1;
						$thirtyEntryMinSleepTime = -1;
						$thirtyEntryMaxSleepTime = -1;
						$thirtyEntryAvgFellSleepTime = -1;
						
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
						if( $totalRows['COUNT(hoursSlept)'] >=30)
						{
							echo "entered 30";
							$query = "SELECT AVG(hoursSlept) FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 30";
							$result = $mysqli->query($query);
							$row = $result->fetch_array(); 
							$thirtyEntryAvgSleepTime = $result;
							
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
					
					
					<center>
					<table border="1"  style="width:300px">
						<tr>
							<td></td>
							<td><b>Value</b></td>
						</tr>
						<tr>
							<td><b>Total Sleep Entries</b></td>
							<td>
								<?php if($totalRows!=-1)
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
								<li><a href="#">Post to Community Thread</a></li>
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
