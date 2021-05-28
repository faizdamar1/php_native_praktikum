<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <style>
            #garis-tepi {
            border: 1px solid black;
            width: 20%;
            padding: 20px;
    </style>

    <center>
        <h2>LOGIN</h2>
        <div id="garis-tepi">
            <form action="proses.php" method="POST">
                <table>
                    <tr>
                        <td>username</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td>:</td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="send" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>

</html>