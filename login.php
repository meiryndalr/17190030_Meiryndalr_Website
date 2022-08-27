<?php
 include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All About Kpop | Login</title>
</head>
<body>
	<table border="1" cellpadding="" cellspacing="">
                    <form action="berhasil_login.php" method="POST" >
                        <tr>
                            <td>Username    :</td>
                            <td><input type="text" name="user" placeholder="Username">
                        </tr>

                        <tr>
                            <td>Password   :</td>
                            <td><input type="Password" name="pass" placeholder="Password">
                        </tr>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" name="masuk" value="Login"></center>
                            </td>
                        
                        </tr>
                    </form>
                    </table>
   

</body>
</html>