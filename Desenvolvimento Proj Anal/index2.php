<?php
//including the database connection file

//Tabela MySql
//create database test;
//use test;
//CREATE TABLE produtos (
//id int(11) NOT NULL auto_increment,
//name varchar(100) NOT NULL,
//precp int(3) NOT NULL,
//grupo varchar(100) NOT NULL,
//PRIMARY KEY (id)
//);

include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Pagina Inicial</title>
</head>
 
<body>
 
    <table width='80%' border=0>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Email</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['age']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> </td>";
            echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
    
    <button><a href="add2.html">Deseja cadastrar um produto ?</a><br/><br/></button>
</body>