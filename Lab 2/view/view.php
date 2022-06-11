<?php
include ("../contorl/contorl.php");

?>



<html>
    <head>
        <h1>Registration Form </h1>
</head>
<body>
<form action="" method="POST" enctype="multipal/form-data">
<table>

<tr>
<td>First Name:</td><td> <input type="text" name="fname" >
<?php
//echo $fnameerr=" error";
?></td></tr>

<tr>
<td>Last Name:</td><td> <input type="text" name="lname" ></td></tr>

<tr>
<td>Age:</td><td> <input type="number" name="age" ></td></tr>
<tr>

<td>Designation:</td><td><input type="radio" name="Designation" value="Junior Programmer">Junior Programmer
<input type="radio" name="Designation" value="Senior Programmer">Senior Programmer
<input type="radio" name="Designation" value="Project Lead">Project Lead
</td></tr>

<tr><td>Preferred language </td>
<td><input type="checkbox" name="java" value="java">java
<input type="checkbox" name="PHP">PHP
<input type="checkbox" name="C++">C++
</td></tr>

<tr>
<td>E-mail:</td><td> <input type="text" name="email" ></td></tr>
</tr>

<tr>
<td>Enter your password</td><td><input type="password" name="password"></td>
</tr>

<tr>
<td>Please choose a file</td><td><input type="file"></td>
</tr>

<tr><td><input type="submit" name="submission"> 
<input type="reset" name="reset">

</td></tr>

</table>
</form>
</body>
</html>



