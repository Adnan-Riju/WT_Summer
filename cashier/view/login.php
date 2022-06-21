<?php
include('../control/logincheck.php');
if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<table> 
<h2>Login</h2>
<form action="" method="post">
    
<tr> 
<td></td><td>Enter User Name </td><td> <input type="text" name="username" placeholder="Username"></td>
</tr>
<tr> 
<td></td><td>Enter Password </td><td><input type="password" name="password" placeholder="Password"></td> 
</tr>

<tr> <td>  <input name="submit" type="submit" value="LOGIN"> </td></tr>

</form>
<br>
<?php 
echo $error; 
?>
</table>
<tr><a href="registration.php">sign up?</a></td>
</body>
</html>
