<?php include('server.php');

    if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
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
                <a href="carrinho.html"><img src="img/carrinho.png" alt="Carrinho de compras" class = "imagemTopoD"  title="Ícone de carrinho"/></a>
            </figure>
            <a href="index.html"><h1>K-buy</h1></a>
            <?php  if (isset($_SESSION['username'])) ?>
              <p>Bem Vindo! <strong><?php echo $_SESSION['username']; ?></strong></p>
              <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>


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
  	<h2>Cadastrar Produto </h2>
  </div>
	
  <form method="post" action="register-pro.php">
  	<?php include('errors.php'); ?>

  	  <label>Nome do Produto </label>
  	  <input type="text" name="nome_pro" value="<?php echo $nome_pro; ?>">


  	  <label>Tipo Produto</label>
  	  <input type="tex" name="tipo" value="<?php echo $tipo; ?>">

      <label>Preço:</label>
      <input type="text" name="preco_produto" value="<?php echo $preco_produto; ?>">

      <label>Tags:</label>
      <input type="text" name="tags" value="<?php echo $tags; ?>">

      <label>Quantidade:</label>
      <input type="text" name="quantidade" value="<?php echo $quantidade; ?>">

  	  <button type="submit" class="btn" name="reg_pro">Cadastrar Produto</button>

  	<p>
  		Quer ver seus produtos cadastrados? <a href="muda-pro.php">Veja Aqui!</a>
  	</p>
  </form>
</body>
</html>