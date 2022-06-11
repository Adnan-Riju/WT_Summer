<?php
$fnameerr="";

if(isset($_POST["submission"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$password = $_POST["password"];



if(empty(($fname))){
    $fnameerr="First name is empty " ;
   }

    

else{

    $fnameerr="First name is" .$fname ; 
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




//$Designation=$_POST["Designation"];

/*if(isset($_POST["Designation"])){

   echo "not found"; 
}
else{
    echo $_POST["Designation"]."<br>";
}

*/





if(isset($_POST["java"]) || isset($_POST["PHP"]) || isset($_POST["C++"]))

{


    if(isset($_POST["java"]) && isset($_POST["PHP"]) && isset($_POST["C++"]))
    {
        echo "Preferred language is ALL". "<br>";
    }

    elseif(isset($_POST["java"]) && isset($_POST["PHP"]))
    {
        echo "Preferred language is java & PHP". "<br>";
    }

    elseif(isset($_POST["java"]) && isset($_POST["C++"]))
    {
        echo "Preferred language is java & C++". "<br>";
    }
    
    elseif(isset($_POST["java"]))
    {
        echo "Preferred language is java ". "<br>";
    }

    elseif(isset($_POST["PHP"]))
    {
        echo "Preferred language is PHP ". "<br>";
    }

    elseif(isset($_POST["C++"]))
    {
        echo "Preferred language is C++ ". "<br>";
    }
    
}
else{
    echo"you are not selected checkbox". "<br>";
}





if(strlen($password)<6)
{
 echo "password can not use less then 6 chrecter". "<br>";

}
else{
    echo "The password is correct". "<br>";

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
    //"Designation"=>$Designation,
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


}



?>

