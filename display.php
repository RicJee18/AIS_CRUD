
<?php
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

$query = "SELECT * FROM Mogamitay";

echo '<table border="0" cellspacing="2" cellpadding="2" width = "50%"> 
      <tr style="background-color: green;"> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">NAMES</font> </td> 
          <td> <font face="Arial">PASSWORDS</font> </td> 
          <td> <font face="Arial">STATUS</font> </td> 
          td>  <font face="Arial">ACTION</font> </td> 
      </tr>';


if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["Username"];
        $field3name = $row["Password"];
        $field4name = $row["Status"];

        echo '<tr style="background-color:grey;"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  
              </tr>';
    }
    $result->free();
} 
?>