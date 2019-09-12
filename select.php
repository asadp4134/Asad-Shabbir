<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Facebook Assignment 1</title>
    </head>
    <body>
        <?php
        include 'connection.php';
$sql="Select*from asad";
$result= mysqli_query($db, $sql);
while($row= mysqli_fetch_assoc($result)){
    
    echo "<br> id: ". $row["Id"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "  " . $row["email"] . "<br>";
    
    
}
        ?>
        <div class="btn btn-default">
            <a href="delete.php?id=1">Delete</a>
            
            
        </div>
    </body>
</html>
