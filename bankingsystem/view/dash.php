<html>
    <body>
        <h1>
            <center>Welcome </center>      
</h1>
        <br>
    </body>
</html>
<?php
session_start();
$userdata = file_get_contents('../data/data.json');

$userdata_array = json_decode($userdata, true);
foreach($userdata_array as $user)

                {
                    
                    if($user["UserName"] == $_SESSION["us"])
                     {
                        echo "<center><h3>";
                    echo $user['Full Name: ']."<br>";
                    echo $user['Phone Number: ']."<br>";
                    echo $user['E-Mail: ']."<br>";
                    echo $user['Age: ']."<br>";
                    echo $user['Gender: ']."<br>";
                    echo $user['Blood Group: ']."<br>";
                    echo "</h3></center>";
                   

                }
                }


?>
<html>
    <body>
        <h4 align="center">
           <a href="logout.php">Logout</a></h4>
        <br>
    </body>
</html>
