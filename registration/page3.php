
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$course=$_POST['course'];
$college = $_POST['college'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE details (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
course VARCHAR(30) NOT NULL,
college VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
   // echo "Table details created successfully";
} else {
  //  echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO details (course,college)
VALUES ('$course', '$college')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Table with database</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style type="text/css">
                table{
                    border-collapse:collapse;
                    width:100%;
                    color:#d96459;
                    font-family:monospace;
                    font-size:25px;
                    text-align:left;


                }
                th{
                    background-color:#588c7e;
                    color:white;
                }
                tr:nth-child(even) {
                    background-color:#f2f2f2;
                }
            </style>
    </head>
    <body>
       
       
        <?php
         $servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT info.id, info.name, info.age , info.dob , info.city,details.course, details.college FROM info,details
WHERE info.id = details.id
ORDER BY info.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table>
     <tr>
    
     <th>Name</th>
     <th>Age</th>
     <th>DOB</th>
     <th>City</th>
     <th>Course</th>
     <th>College</th>
     </tr>";
    while($row = $result->fetch_assoc()) {
        
        echo "<tr>
    
        <td> " . $row["name"]. "</td>
        <td>" . $row["age"]. "</td>
        <td>" . $row["dob"]."</td>
        <td>" . $row["city"]. "</td>
        <td>" . $row["course"]. "</td>
        <td>" . $row["college"]. "</td>
        </tr>";
    }
         echo "</table>";
    
} else {
    echo "0 results";
}

    $conn->close();



        ?>
        </table>
        <script src="" async defer></script>
    </body>
</html>