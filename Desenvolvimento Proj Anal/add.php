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
            <input type="text" placeholder="Pesquisar...">
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
    
<?php
//including the database connection file
require_once("config.php");
 
    
    
    
if(isset($_POST['Submit'])) {    
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordC = $_POST['passwordC'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    
    
    if ($password == ""){
        echo "<font color='red'>É necessario preencher a senha</font><br/>";
    }else if ($password == $passwordC){
        echo "<font color='red'>nnice.</font><br/>";
    }else{
        echo "<font color='red'>diferente.</font><br/>";
    }
    
    
            
    // checking empty fields
    if(empty($name) || empty($lastname) || empty($email)  || empty($cpf) || empty($endereco) || empty($cep) || empty($telefone)) {                
        if(empty($name)) {
            echo "<font color='red'>É necessario preencher o nome.</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>É necessario preencher o sobrenome.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>É necessario preencher email.</font><br/>";
        }
        
       
        
        if(empty($cpf)) {
            echo "<font color='red'>É necessario preencher o cpf.</font><br/>";
        }
        
        if(empty($endereco)) {
            echo "<font color='red'>É necessario preencher endereço.</font><br/>";
        }
        
        if(empty($cep)) {
            echo "<font color='red'>É necessario preencher o cep.</font><br/>";
        }
        
        if(empty($telefone)) {
            echo "<font color='red'>É necessario preencher o telefone.</font><br/>";
        }
        
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        
            
        $result = mysqli_query($mysqli, "INSERT INTO usuarios (name, lastname, email, password, cpf, endereco, cep, telefone) VALUES('$name','$lastname','$email','$password','$cpf','$endereco','$cep','$telefone')");
        
        //display success message
        echo "<font color='green'>Cadastro efetuado com sucesso.";
        echo "<br/><a href='index.php'>Visualizar</a>";
    }
}
?>

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
</html>