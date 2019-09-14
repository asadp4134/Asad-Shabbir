<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $db=mysqli_connect("localhost","root","","asad");
    if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully";

        ?>
    </body>
</html>
