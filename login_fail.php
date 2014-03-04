<html>
    <head>
        Login Failed!
        <!--- Convey that the login failed with the submitted parameters. --->
    </head>

    <body>

        <br>
        <br>
        <!--- Indicate that one or both of these parameters was the issue. --->
        Please enter a valid username and password combination.
        <br>
        <br>

        <!--- Redisplay the form for users to input a different username and password. --->
        <form action="verify.php" method="post">
            Username: <input type="text" name="username" label="user_field">
            <br>
            Password: <input type="password" name="password" label="pass_field">
            <br>
            <input type="submit" value="Login">
        </form>

        <br>
        <!--- Link to the Create Account page, activated by the user clicking on the displayed link. --->
        If you do not have already have an account then click <a href="CreateAccount.php">here</a>
        to go to the Create Account page.
    </body>
</html>