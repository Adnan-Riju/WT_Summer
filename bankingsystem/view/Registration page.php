<?php
include("../control/process.php");
?>
<html>
  <h1 align="center"> Welcome to Registration Form </h1>
  <hr>
    <body bgcolor="">
      <center>
    <form action ="" method="POST" enctype="multipart/form-data">
<table>
  <br>
<td></td>
  <tr> <td>Full Name: </td> 
  <td><input type="Text" name="fn"></td><td><?php echo $err1 ?></td></tr>
  <td><br></td>
  <tr> <td>User Name: </td>  
  <td><input type="Text" name="un"></td><td><?php echo $err2 ?></td>
  </tr>
  <td><br></td>
  <tr>
  <td>Phone Number: </td>  
  <td><input type="tel" name="phno"></td>
  <td><?php echo $errp ?></td>
</tr>
<td><br></td>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="em"></td>
  <td><?php echo $err5 ?></td> </tr>
  <td><br></td>
<tr>
  <td>Age: </td>  
  <td><input type="number" name="age"></td>
  <td><?php echo $erra ?></td>
</tr>
<td><br></td>

  <tr>
  <td>Gender: </td> 
  <td><input type="radio" name="gen" value = "Male">Male
  <input type="radio" name="gen" value = "Female">Female</td>
  <td><?php echo $err3 ?></td></tr>
  <td><br></td>
</tr>
<tr>
  <td>Blood Group: </td> 
  <td><input type="radio" name="bg" value = "A+">A+
  <input type="radio" name="bg" value = "A-">A-
  <input type="radio" name="bg" value = "B+">B+
  <input type="radio" name="bg" value = "B-">B-
  <input type="radio" name="bg" value = "AB+">AB+
  <input type="radio" name="bg" value = "O+">O+
  <input type="radio" name="bg" value = "O-">O-
</td>
  <td><?php echo $errb ?></td></tr>
  <td><br></td>
</tr>
  <tr><td>Password: </td>
  <td><input type="password" name="pass"></td>
  <td><?php echo $err6 ?></td>
</tr>
<td><br></td>
<tr><td>Confirm Password: </td>
  <td><input type="password" name="passc"></td>
  <td><?php echo $errc ?></td>
</tr>
<td><br></td>
  <tr><td>Please choose a file: </td>
  <td><input type="file" name="myfile"></td>
  <td><?php echo $err7,$err8 ?></td>
</tr>
<td><br></td>
</table>
  <td><input type="submit" name="sm" value="Submit">

  <input type="reset" name="rs"></td> </tr>
  <tr><td><?php echo $dataerr ?></td></tr>
</form>
</center>
    </body>
</hr>

</html>