<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
        <title></title>
    </head>
    <body>
 
<fieldset>
    <legend>Add Member</legend>
 
    <form action="php-action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name" /></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" placeholder="Age" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact" placeholder="Contact" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="crud.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
