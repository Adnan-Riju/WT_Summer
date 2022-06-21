
<?php

session_start(); 
setcookie("usercheck","visited",time()+86400);
if(isset($_COOKIE["usercheck"]))
{
    echo"you have visited us";
}
else{
    echo"welcome to our site";
}
 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];

   }
 












   // $string = file_get_contents("../data/data.json");
   // $json = json_decode($string, true);
   
   // foreach ($json as $key => $value) {
   //     if (!is_array($value)) {
   //         echo $key . '=>' . $value . '<br />';
   //     } else {
   //         foreach ($value as $key => $val) {
   //             echo $key . '=>' . $val . '<br />';
   //         }
   //     }
   // }



}



?>