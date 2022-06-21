<?php
$fnameerr="";

if(isset($_POST["submission"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$password = $_POST["password"];




if(empty($fname)){
    echo"first name is empty ". "<br>" ;
   }

    

else{

    echo "first name is" .$fname. "<br>" ; 
}

if(empty($lname)){
    echo"last name is empty ". "<br>" ;
   }

    

else{

    echo "last name is" .$lname. "<br>" ; 
}

if(empty($age)){
    echo"age is empty " . "<br>";
   }

    

else{

    echo "Age is" .$age . "<br>"; 
}



}





if(strlen($password)<7)
{
 echo "password can not use less then 7 chrecter". "<br>";

}
else{
    echo " correct password". "<br>";

}


//$_file["myfile"]["name"];
if (empty($_FILES["file"]["name"]))
{
    echo "No File Attached";
}
else{
    echo "Complead" . $_FILES["file"]["name"];
    if (move_upload_file($_FILES["file"]["tmp_name"],"../file/$fname.pdf"))
    {
        echo"File Uploaded";
    }
    else{
        echo"File is not Uploaded";
    }
}


$filecontain=file_get_contents("../data/data.json",true);
$arrphp=json_decode($filecontain);
$myarr=array(
    "FirstName"=>$fname,
    "LastName"=>$lname,
    "Age"=>$age,
   
    "Password"=>$password,

);
$arrphp[]=$myarr;
$jsonarr=json_encode($arrphp,JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsonarr))
    {
        echo"data stored";
    }
    else{
        echo"No data stored";
    }






?>