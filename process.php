<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';
$dbname='TernaDb';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo "Connected successfully <br/>";
$sql = "create table students(Sid INT,Sname VARCHAR(20),Age INT)";  
if(mysqli_query($conn, $sql)){  
 echo "Table students created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
mysqli_close($conn);
?>
