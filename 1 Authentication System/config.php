<?php  


//host
$host = "localhost";

//dbname
$dbname = "auth-sys";

//user
$user = "root";

//pwd
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

// if($conn == true){
//     echo "<h1>Connection Successful</h1>";
//     }else{
//         echo "Error in connection!";
// }

?>