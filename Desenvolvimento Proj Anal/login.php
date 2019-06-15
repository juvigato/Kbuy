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
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>


  		<label>Username:</label>
  		<input type="text" name="username" >

  		<label>Password:</label>
  		<input type="password" name="password">

  		<button type="submit" class="btn" name="login_user">Login</button>
  	<p>
  		Não é um membro ainda? <a href="register.php">Cadastre-se</a>
  	</p>
  </form>
</body>
</html>