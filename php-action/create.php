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
 
require_once 'connection.php';
 
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
 
    $sql = "INSERT INTO `asad`(`Id`, `fname`, `lname`, `contact`, `age`,) VALUES (NULL,'$fname','$lname','$contact','$age')";
    
    if($db->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $db->connect_error;
    }
 
    $db->close();
}
 
?>
    </body>
</html>
