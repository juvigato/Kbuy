<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordC = $_POST['passwordC'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];    
    
    
    
    // checking empty fields
    if(empty($name) || empty($lastname) || empty($email) || empty($password) || empty($passwordC) || empty($cpf) || empty($endereco) || empty($cep) || empty($telefone)) {                
        if(empty($name)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($passwordC)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($cpf)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($endereco)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($cep)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }
        
        if(empty($telefone)) {
            echo "<font color='red'>É necessario preencher este campo.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE usuarios SET name='$name',lastname='$lastname',email='$email',password='$password',cpf='$cpf',endereco='$endereco',cep='$cep',telefone='$telefone' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $lastname = $res['lastname'];
    $email = $res['email'];
    $password = $res['password'];
   
    $cpf = $res['cpf'];
    $endereco = $res['endereco'];
    $cep = $res['cep'];
    $telefone = $res['telefone'];
}
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
            <a class = "textoTopoD"><h3>Cadastrar</h3></a>
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
    
    <form name="form1" method="post" action="edit.php">
        <div class="meio1">
                <label for="nome">Nome:</label>
                <input type="text" name="name" value="<?php echo $name;?>">
            
            
            
                <label for="nome">Sobrenome:</label>
                <input type="text" name="lastname" value="<?php echo $lastname;?>">
            
            
      
                <label for="email">E-mail:</label>
              <input type="text" name="email" value="<?php echo $email;?>">
           
            
           
                <label for="senha">Senha:</label>
                <input type="password" name="password" value="<?php echo $password;?>">
            
            <label for="confirmasenha">Confirma Senha:</label>
                <input type="password" name="passwordC" value="<?php echo $passwordC;?>">
            
            </div>
            <div class="meio2">
                <label for="cpf">CPF:</label>
                <input oninput="mascara(this, 'cpf')" id="campo4" type="text" class="form-control" placeholder="Ex.: xxx.xxx.xxx-xx" autocomplete="off" name="cpf" value="<?php echo $cpf;?>">
        
            
        
                <label for="endereço">Endereço:</label>
                <input type="text" name="endereco" value="<?php echo $endereco;?>">
        
            
            
                <label for="campo6">CEP</label>
                <input  oninput="mascara(this, 'cep')" id="campo6" type="text" class="form-control" placeholder="Ex.: xxxxx-xxx" autocomplete="off" name="cep" value="<?php echo $cep;?>">
            
            
             
                <label for="campo7">Telefone</label>
                <input oninput="mascara(this, 'tel')" id="campo7" type="text" class="form-control" placeholder="Ex.: xxxxx-xxxx" autocomplete="off" name="telefone" value="<?php echo $telefone;?>">
            
        
            
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" name="update" value="Update">
        </div>
    </form>
    
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

<script>
    
    function mascara(i,t){
        var v = i.value;
    
        if(isNaN(v[v.length-1])){
            i.value = v.substring(0, v.length-1);
            return;
        }
   
        if(t == "data"){
            i.setAttribute("maxlength", "10");
            if (v.length == 2 || v.length == 5) i.value += "/";
        }
        
        if(t == "cpf"){
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";
        }
        
        if(t == "cnpj"){
            i.setAttribute("maxlength", "18");
            if (v.length == 2 || v.length == 6) i.value += ".";
            if (v.length == 10) i.value += "/";
            if (v.length == 15) i.value += "-";
        }
        
        if(t == "cep"){
            i.setAttribute("maxlength", "9");
            if (v.length == 5) i.value += "-";
        }
        
        if(t == "tel"){
            if(v[0] == 9){
                i.setAttribute("maxlength", "10");
                if (v.length == 5) i.value += "-";
           }else{
                i.setAttribute("maxlength", "9");
                if (v.length == 4) i.value += "-";
           }
        }        
    }    
    
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-white";
    }
            
        </script>