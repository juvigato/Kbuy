<?php
//including the database connection file

//Tabela MySql
//create database test;
//use test;
//CREATE TABLE users (
//id int(11) NOT NULL auto_increment,
//name varchar(100) NOT NULL,
//age int(3) NOT NULL,
//email varchar(100) NOT NULL,
//PRIMARY KEY (id)
//);

include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id DESC"); // using mysqli_query instead
?>
 
<!DOCTYPE html>
<html>
    <!--comentário-->
    <head lang="pt-br">
        <title>K-buy</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Grupo 1"/>
        <meta name="description" content="projeto k-buy"/>
        <meta name="keywords" content="html,css,mackenzie"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript" src="JS/leozin.js"></script>
        <script type="text/javascript" src="JS/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>
              
    </head>
 
<body>
 
    <div class = "top">
            <figure>
                <img src="img/brasil.png" alt="Bandeira Brasil" class = "imagemTopoE"/ title="Bandeira do Brasil">
                <img src="img/eua.png" alt="Bandeira EUA" class = "imagemTopoE" title="Bandeira dos EUA"/>
                <img src="img/coreia.png" alt="Bandeira Coreia"class = "imagemTopoE" title="Bandeira da Coreia do Sul"/>
                <img src="img/carrinho.png" alt="Carrinho de compras" class = "imagemTopoD"  title="Ícone de carrinho"/>
            </figure>
            <a href="index.html"><h1>K-buy</h1></a>
            <a class = "textoTopoD" href="add.html"><h3>Cadastrar</h3></a>
            <a class = "textoTopoD2"><h3>Login</h3></a>
        </div>
        
        <div class="topnav">
            <input type="text" placeholder="Search...">
        </div>
        
        <nav>
            <ul class = "nav"> <!-- era "menu"-->
                <li><a href="#">Home</a></li>
                <li><a href="#">Produtos</a>
                    <ul class="submenu-1">
                        <li><a href="#">Albuns</a></li>
                        <li><a href="#">Cards</a></li>
                        <li><a href="#">Light Stickers</a></li>
                        <li><a href="#">Posters</a></li>
                    </ul>
                </li>
                <li><a href="#">Artistas</a>
                    <ul class="submenu-2">
                        <li><a href="#">BTS</a></li>
                        <li><a href="#">EXO</a></li>
                        <li><a href="#">Black Pink</a></li>
                        <li><a href="#">Twice</a></li>
                    </ul>
                </li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <br><br>
        <div class="w3-content w3-display-container" style="max-width:1000px">
            <img class="mySlides" src="img/blackpink.jpg">
            <img class="mySlides" src="img//bts.jpg">
            <img class="mySlides" src="img/exo.png">
            <img class="mySlides" src="img/twice.jpg">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
            </div>
        </div>
    
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
            echo "<td>".$res['cpf']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> </td>";
            echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
    <br>
    
    <button><a href="add2.html">Deseja cadastrar um produto ?</a><br/><br/></button>
    
     <div class="footer">
        <table>
            <tbody>
                <tr>
                    <td>Contato</td>
                    <td>Horário de Atendimento</td>
                    <td>Siga a gente!</td>
                </tr>
                <tr>
                    <td>(xxx)xxxx-xxxx</td>
                    <td>Segunda a Sexta 8h - 16h(BRT)</td>
                    <td><a href="https://twitter.com/login?lang=pt" class="link" target="_blank">Twitter</a></td>
                </tr>
                <tr>
                    <td>contato@kbuy.com</td>
                    <td></td>
                    <td><a href="https://pt-br.facebook.com/" class="link" target="_blank">Facebook</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="https://www.instagram.com/?hl=pt-br" class="link" target="_blank">Instagram</a></td>
                </tr>
                     
            </tbody>
        <figure>
            <img src="img/notas.png" alt="Nota de dinheiro" class = "imagemD" title="Ícone de pagamento em dinheiro"/>
            <img src="img/pay.png" alt="Simbolo PayPal" class = "imagemD" title="Icone do PayPal"/>
        </figure>
        </table>
        
        </div>
</body>