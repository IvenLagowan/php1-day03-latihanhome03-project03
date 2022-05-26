<?php

    // Peroleh Variabel msg
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Manajemen Data Bintang Film</title>
</head>

<body>
    <h1>Login Manajemen Data Bintang Film</h1>
    <tr>
        <form action="index.php" method="post">
            <table>
                <td>
                    <input type="text" name="pemakai">
                </td>
    </tr>
    <tr>
        <td>Password</td>

        <td>
            <input type="password" name="sandi">
        </td>
    </tr>
    </table>
    <input type="submit" value="Login">
    <input type="reset" value="Reset">
    </form>
    <?php
    print("$msg<br>");
    ?>
</body>

</html>