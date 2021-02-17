<?php

$userN  = $_GET["thisUser"];
$passW  = $_GET["thisPass"];



////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd204";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//create data
$sql = "INSERT INTO Mogamitay(Username, Password, Status)   
VALUES ('".$userN."', '".$passW."', 'Active')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }


//display all data

// $query = "SELECT * FROM Mogamitay";

// echo '<table border="0" cellspacing="2" cellpadding="2" width = "50%"> 
//       <tr style="background-color: green;"> 
//           <td> <font face="Arial">ID</font> </td> 
//           <td> <font face="Arial">NAMES</font> </td> 
//           <td> <font face="Arial">PASSWORDS</font> </td> 
//           <td> <font face="Arial">STATUS</font> </td> 
//       </tr>';


// if ($result = $conn->query($query)) {
//     while ($row = $result->fetch_assoc()) {
//         $field1name = $row["ID"];
//         $field2name = $row["Username"];
//         $field3name = $row["Password"];
//         $field4name = $row["Status"];

//         echo '<tr style="background-color:grey;"> 
//                   <td>'.$field1name.'</td> 
//                   <td>'.$field2name.'</td> 
//                   <td>'.$field3name.'</td> 
//                   <td>'.$field4name.'</td> 
                  
//               </tr>';
//     }
//     $result->free();
// } 

$conn->close();
?>
