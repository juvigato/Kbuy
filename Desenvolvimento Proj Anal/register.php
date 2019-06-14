<?php include('server.php') ?>
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
                <a href="carrinho.html"><img src="img/carrinho.png" alt="Carrinho de compras" class = "imagemTopoD"  title="Ícone de carrinho"/></a>
            </figure>
            <a href="index.html"><h1>K-buy</h1></a>
            <a href="register.php" class = "textoTopoD"><h3>Cadastrar</h3></a>
            <a href="login.php" class = "textoTopoD2"><h3>Login</h3></a>
        </div>
        <div class="topnav">
            <input type="text" placeholder="Procurar...">
        </div>
        
        <nav>
            <ul class = "nav"> <!-- era "menu"-->
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Produtos</a>
                    <ul class="submenu-1">
                        <li><a href="telaAlbuns.html">Albuns</a></li>
                        <li><a href="telaCards.html">Cards</a></li>
                        <li><a href="telaPosters.html">Posters</a></li>
                        <li><a href="telaChaveiros.html">Chaveiros</a></li>
                        <li><a href="telaLightStickers.html">Light Stickers</a></li>
                    </ul>
                </li>
                <li><a href="#">Artistas</a>
                    <ul class="submenu-2">
                        <li><a href="telaBts.html">BTS</a></li>
                        <li><a href="telaExo.html">EXO</a></li>
                        <li><a href="telaBlackPink.html">BlackPink</a></li>
                        <li><a href="telaTwice.html">Twice</a></li>
                    </ul>
                </li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
        <br><br>
  <div class="header">
  	<h2>Cadastrar</h2>
  </div>
	
  <form method="post" action="register.php" class="form1">
  	<?php include('errors.php'); ?>

  	  <label>Usuario:</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">

      <label>Nome</label>
      <input type="text" name="nome" value="<?php echo $nome; ?>">

      <label>Sobrenome</label>
      <input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>">

  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">


  	  <label>Password</label>
  	  <input type="password" name="password_1">

  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
<div class="meio2">
      <label>CPF:</label>
      <input oninput="mascara(this, 'cpf')" id="campo4" type="text" class="form-control" placeholder="Ex.: xxx.xxx.xxx-xx" autocomplete="off" name="cpf" value="<?php echo $cpf; ?>">

      <label>Endereço</label>
      <input type="text" name="endereco" value="<?php echo $endereco; ?>">

      <label>CEP</label>
      <input oninput="mascara(this, 'cep')" id="campo6" type="text" class="form-control" placeholder="Ex.: xxxxx-xxx" autocomplete="off" name="cep" value="<?php echo $cep; ?>">

      <label>Telefone</label>
      <input oninput="mascara(this, 'tel')" id="campo7" type="text" class="form-control" placeholder="Ex.: xxxxx-xxxx" autocomplete="off" name="telefone" value="<?php echo $telefone; ?>">
</div>

  	  <button type="submit" class="cad" name="reg_user">Cadastrar-se</button>

  	<p>
  		Já é um membro? <a href="login.php">Faça Login!</a>
  	</p>
  </form>
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