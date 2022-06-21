<?php
include ("../control/registration_process.php");

?>



<html>
    <head>
        <h1>Registration Form </h1>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<table>

<tr>
<td>First Name:</td><td> <input type="text" name="fname" >
<?php

?></td></tr>

<tr>
<td>Last Name:</td><td> <input type="text" name="lname" ></td></tr>

<tr>
<td>Age:</td><td> <input type="number" name="age" min="0" >   </td></tr>
<tr>

<tr>
<td>E-mail:</td><td> <input type="text" name="email" ></td></tr>
</tr>

<tr>
<td>Enter your password</td><td><input type="password" name="password"></td>
</tr>

<tr>
<td>Enter your recent picture</td><td><input type="file" name="file"></td>
</tr>

<tr><td><input type="submit" name="submission"> 
<input type="reset" name="reset"><br>


</td></tr>

</table>
</form>
</body>
</html>


