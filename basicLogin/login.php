<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="check_login.php">

            <table>
                <tr>
                    <td><h3>Name : </h3></td>
                    <td>
                        <input type="text" name="name" >
                    </td>
                </tr>
                <tr>
                    <td><h3>Password : </h3></td>
                    <td>
                        <input type="password" name="password" >
                    </td>
                </tr>
                <tr>
                    <td><a href="registration.php">Sign Up</a></td>
                    <td>
                        <input type="submit" name="login" value="Log In">
                    </td>
                </tr>
            </table>

        </form>
    </body>
</html>