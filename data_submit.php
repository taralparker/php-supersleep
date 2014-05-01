<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 4/2/14
 * Time: 3:00 PM
 */

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

//if logged in
if (login_check($mysqli) == true)
{
	$month = $_POST['month'];
	echo $month;




	if (isset($_POST['month'], $_POST['day'], $_POST['year'], $_POST['hour'], $_POST['minute'], $_POST['ampm'], $_POST['hoursslept'], $_POST['journal']))
	{
		$month = filter_input(INPUT_POST, 'month', FILTER_SANITIZE_STRING);
		$day = filter_input(INPUT_POST, 'day', FILTER_SANITIZE_STRING);
		$year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
		$hour = filter_input(INPUT_POST, 'hour', FILTER_SANITIZE_STRING);
		$minute = filter_input(INPUT_POST, 'minute', FILTER_SANITIZE_STRING);
		$ampm = filter_input(INPUT_POST, 'ampm', FILTER_SANITIZE_STRING);
		$hoursslept = filter_input(INPUT_POST, 'hoursslept', FILTER_SANITIZE_STRING);
		$journal = filter_input(INPUT_POST, 'journal', FILTER_SANITIZE_STRING);
		$username = htmlentities($_SESSION['username']);

        //Check that the date is valid, return to the data entry page if invalid.
        if(!checkdate($month,$day,$year))
        {
            //Store previous journal entry so that the user does not have to reenter the journal entry.
            $_SESSION['journalentry'] = $_POST['journal'];
            $redirectlocation = 'Location: ../data_entry_reload.php';
        }
        else{
            $redirectlocation = 'Location: ../account.php';
        }
		//if journal is equal to "Sleep Comments"
		if (strcasecmp($journal,"Sleep Comments (limit 300 characters)")==0)
		{
			//clear journal if text is default
			$journal = "";
		}
		//if the journal is more then 300 characters, cut it short (No buffer overflows for us! ha!)
		if(strlen($journal) > 300)
		{
			$journal = substr($journal, 0,300);
		}
		// Insert the new entry into the database
		if ($insert_stmt = $mysqli->prepare("INSERT INTO sleep_data (username, month, day, year, hour, min, ampm, hoursSlept, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"))
		{
			$insert_stmt->bind_param('sssssssss', $username, $month, $day, $year, $hour, $minute, $ampm, $hoursslept, $journal);
			// Execute the prepared query.
			if (! $insert_stmt->execute())
			{
                $redirectlocation = 'Location: ../error.php?err=Journal failure: INSERT';
			}
		}
		header($redirectlocation);
	}
	else
	{
		// The correct POST variables were not sent to this page.
		echo 'Invalid Request';
	}
}
?>
<?php if (login_check($mysqli) == false) : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
<?php endif; ?>