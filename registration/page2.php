<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$city = $_POST['city'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE info (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
age int(2) NOT NULL,
dob date not null,
city varchar(30) not null,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
   // echo "Table info created successfully";
} else {
   // echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO  info (name,age , dob,city )
VALUES ('$name', '$age', '$dob', '$city')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            
            body {font-family:  sans-serif; 
                font-size: large;
                background-color:slategrey;}
                form {border: 3px ;}
                
                SELECT[type="text"]{
                  width: 20%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
                }
                 
                button {

                         background-color:#ff4f81;
                         color: white;
                         padding: 8px 5px;
                         margin: 5px 0;
                         border: none;
                         cursor: pointer;
                         width: 10%;
                        }
                 button:hover {
                          opacity: 0.8;
                   }
                
                
            

        </style>
    </head>
    <body>
            <form action="page3.php"   method="POST" >
        <h1>Student Details</h1>
         <h3>Course: </h3>
        <SELECT type="text" id="course" name="course"> 
            
                <OPTION Value="BA(Tamil)" required>BA(Tamil)</OPTION>
                <OPTION Value="BA(English)" required>BA(English)</OPTION>
                <OPTION Value="BA(History)" required>BA(History)</OPTION>
                <OPTION Value="BSc(Maths)" required>BSc(Maths)</OPTION>
                <OPTION Value="BSc(Physics)" required>BSc(Physics)</OPTION>
                <OPTION Value="BSc(Chemistry)" required>BSc(Chemistry)</OPTION>
                <OPTION Value="BSc(Botany)" required>BSc(Botany)</OPTION>
                <OPTION Value="BSc(Zoology)" required>BSc(Zoology)</OPTION>
                <OPTION Value="BSc(Microbiology)" required>BSc(Microbiology)</OPTION>
                <OPTION Value="BSc(Nutrition)" required>BSc(Nutrition)</OPTION>
               
                </SELECT><br><br>

                 <h3>College Name: </h3>
        <SELECT type="text" id="college" name="college">
            
                <OPTION Value="Presidency College,Chennai" required>Presidency College, Chennai </OPTION>
                <OPTION Value="Loyola College,Chennai" required> Loyola College, Chennai </OPTION>
                <OPTION Value="PSG College of Arts and Science,Coimbatore" required>PSG College of Arts and Science, Coimbatore </OPTION>
                <OPTION Value="Women`s Christian College,Chennai" required>Women`s Christian College, Chennai </OPTION>
                <OPTION Value="Kongunadu Arts & Science College,Coimbatore" required> Kongunadu Arts & Science College, Coimbatore </OPTION>
                <OPTION Value="Stella Maris College for Women,Chennai" required>Stella Maris College for Women, Chennai </OPTION>
                <OPTION Value="Jamal Mohamed College,Tiruchirappalli" required> Jamal Mohamed College, Tiruchirappalli </OPTION>
                <OPTION Value="Thiagarajar College,Madurai" required> Thiagarajar College, Madurai</OPTION>
                <OPTION Value="Bishop Heber College,Tiruchirappalli" required>Bishop Heber College, Tiruchirappalli </OPTION>
                <OPTION Value=" St. Joseph's College,Tiruchirappalli" required> St. Joseph's College, Tiruchirappalli </OPTION>
                </SELECT><br><br>
             
                
                <button  type="submit" onclick="display()" value="Submit">Submit</button><br><br>

         
        <script>
               //  function display() {
                    
                 //   var course=document.getElementById("course").value;
              //   localStorage.setItem("course",course);
                 
             //    var college=document.getElementById("college").value;
              //   localStorage.setItem("college",college);
                
                
             //    }
                
        

 
        </script>
        </form>
    </body>
</html>





