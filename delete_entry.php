<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

//Check that the user is logged in
if(login_check($mysqli) == true)
{
    //Retrieve the id to delete and then clear the variable.
    $id = $_POST['id'];
    $_POST['id'] = NULL;

    //If the proper post variable was passed, then execute the delete on the sleep data table.
    if(isset($id))
    {
        $result = mysqli_query($mysqli, "DELETE FROM sleep_data WHERE id='" . $id . "'");

        //If the delete query was executed then return to the the view statistics page without setting the delerr variable.
        //The delerr variable is checked to display a message at the view statistics page if the selected entry was not
        //deleted for some reason.
        if($result)
        {
            $redirectlocation = 'Location: ../view_statistics.php';
        }
        else
        {
            $_SESSION['delerr'] = 1;
            $redirectlocation = 'Location: ../view_stastics.php';
        }

    }
    else
    {
        // The correct POST variables were not sent to this page.
        echo 'Invalid Request';
    }
    header($redirectlocation);
}
?>
<!-- If the user is not logged in, then post an error message. -->
<?php if(login_check($mysqli) == false) : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>