<?php
session_start();

$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$errp="";
$errb="";
$erra="";
$errc="";
$hasError=0;
$dataerr="";
$value="";
if(isset($_POST["sm"]))
{

$FL=$_REQUEST["fn"];
$LN=$_REQUEST["un"];
$em=$_REQUEST["em"];
$phn=$_REQUEST["phno"];
$ag=$_POST["age"];
//$gn=$_REQUEST["gen"];  
//$bg=$_REQUEST["bg"];
$pas=$_REQUEST["pass"];
$pasc=$_REQUEST["passc"];

$pattern = "([0-9])";
$pattern0 = '/^[0-9]{11}+$/';
$pattern1 = '/^[a-zA-Z]{4,10}$/';
if(!empty($FL))
{
if(preg_match($pattern, $FL))
{
    $err1= "Full Name Contains Numbers<br>";
    $hasError++;
}
else
{
 $_SESSION["fn"]=$FL;   
 //echo $FL." ";
}
}
else
{
    $err1="Empty Box";
    $hasError++;
}
if(!empty($LN))
{
if(!preg_match($pattern1,$LN))
{
    $err2="User Name Contains Numbers or special characters <br>";
    $hasError++;
}
else
{
    $_SESSION["un"]=$LN;
 //echo $LN."<br>";
}
}
else
{
    $err2="Empty Box";
    $hasError++;
}
if(!preg_match($pattern0,$phn))
{
  $errp= "Phone Number must contain only number";
  $hasError++;
}
else
{
    $_SESSION["phno"]=$phn;
}
if(isset($_REQUEST["gen"]))
{
    
    $_SESSION["gen"]=$_REQUEST["gen"]."<br>";
}
else
{
    $err3="Gender NOT SET<br>";
    $hasError++;
}
if(isset($_REQUEST["bg"]))
{
    $_SESSION["bg"]=$_REQUEST["bg"]."<br>";
}
else
{
    $errb="Blood group NOT SET<br>";
    $hasError++;
}
if(strlen($em)==0)
{
    $err5="Must enter E-Mail<br>";
    $hasError++;
}
else
{
    $_SESSION["em"]=$em."<br>"; 
}
if($ag<18)
{
 $erra="Age should be above 18";
 $hasError++;
}
else
{
    $_SESSION["age"]=$ag;
}
if(strlen($pas)==0)
{
    $err6="!!!Enter Password!!!<br>";
    $hasError++;
}
else if(strlen($pas)<7)
{
    $err6= "Password must be more than 6 characters<br>";
    $hasError++;
}
else
{
    $_SESSION["pass"]=$pas."<br>";
}
if($pas!=$pasc)
{
    $errc="!!!Passwords do not match!!!<br>";
    $hasError++;
}
else
{
    $_SESSION["passc"]=$pasc."<br>";
}
//echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/myFile.jpg"))
{
    $err8=" file uploaded";

}
else
{
    $err7=" uploading error";
    $hasError++;
    //$_SESSION["myfile"]=$_FILES["fl"]["error"];
}
if($hasError==0)
{
    header("Location: ../view/regconf.php");
}
if($hasError==0)
{
$formdata=array(
    'Full Name: '=>$FL,
    'UserName'=>$LN,
    'Phone Number: '=>$phn,
    'E-Mail: '=>$em,
    'Age: '=>$ag,
    'Gender: '=>$_POST['gen'],
    'Blood Group: '=>$_REQUEST["bg"],
    'Password'=>$pas,
    'Confirm Password: '=>$pasc,
    'Files: ' => $_FILES["myfile"]["name"]
);
$existingdata = file_get_contents("../data/data.json");
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
//Convert updated array to JSON
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

if(file_put_contents("../data/data.json",$jsondata))
{
    $dataerr="Data Saved";

}
else
{
    $dataerr="no data saved";
}
}
}

?>