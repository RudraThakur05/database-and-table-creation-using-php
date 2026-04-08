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
echo "Connected successfully";
$sql = 'INSERT INTO students VALUES (521,"Madhu", 30)';  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}    
mysqli_close($conn);
?>
