<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "table";


$conn = mysqli_connect($servername,$username,$password,$dbname);
$result = mysqli_query( $conn, "select * from datafile where id = '1' ");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <style>
    .acb {
      background-color:dimgray;
    }
    </style>
</head>
<body>

<div class = "acb">
<?php 



                  while($rows = mysqli_fetch_array($result)  )
                  {
               ?> 
               
                  <tr>
                     <td><?php echo $rows['id'] ?></td>
                     <td><?php echo $rows['Name'] ?></td>
                     

                  </tr>   

               <?php
                  }
               ?>
                <button  ><a href="team/">WELCOME</a></button>
               
               <?php
                 function writeMsg() {
                    echo "Hello world!";
                  }
                  
                
               ?>


               </div>
  
</body>
</html>