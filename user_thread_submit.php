<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 5/8/14
 * Time: 1:46 PM
 */

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

//custom session validator
sec_session_start();

//if logged in
if (login_check($mysqli) == true)
{
    //sanitize user comment
    $user_comment = filter_input(INPUT_POST, 'user_comment', FILTER_SANITIZE_STRING);
    $username = htmlentities($_SESSION['username']);

    $redirectlocation = 'Location: ../user_thread.php';

        //insert new comment into the database
        $sql = "INSERT INTO user_comments (username, comment) VALUES ('$username','$user_comment')";
        if($mysqli->query( $sql ) )
        {
            header($redirectlocation);
        }
        else
        {
            //Show an error if the query fails
            $redirectlocation = 'Location: ../error.php?err=An error has occurred while trying to submit your comment.';
            header($redirectlocation);
        }
}
?>
<?php if (login_check($mysqli) == false) : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>