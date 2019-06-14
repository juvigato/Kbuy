<?php 
	require("server.php");
  	if (!isset($_SESSION['username'])) {
  		$_SESSION['msg'] = "É necessário fazer login primeiro";
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
            <!-- logged in user information -->
    		<?php  if (isset($_SESSION['username'])) ?>
    		<p>Bem Vindo! <strong><?php echo $_SESSION['username']; ?></strong></p>
    		<a href="ver-dados.php"><h1>Meus dados</h1></a>
    		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>


        </div>
        <div class="topnav">
            <input type="text" placeholder="Procurar...">
        </div>
        
        <nav>
            <ul class = "nav"> <!-- era "menu"-->
                <li><a href="index_logado.html">Home</a></li>
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
        <div class="w3-content w3-display-container" style="max-width:1000px">
            <a href="telaBlackPink.html"><img class="mySlides" src="img/blackpink.jpg"></a>
            <a href="telaBts.html"><img class="mySlides" src="img//bts.jpg"></a>
            <a href="telaExo.html"><img class="mySlides" src="img/exo.png"></a>
            <a href="telaTwice.html"><img class="mySlides" src="img/twice.jpg"></a>
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style='font-size:30px;'>&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)" style='font-size:30px;'>&#10095;</div>
            </div>
        </div>
        <h2>Mais Recentes</h2>
        <div class = "recentes">
            <div><a href="#"><img src="img//bts/album1.jpg" alt="Álbum 'Love Yorself' BTS"/>Álbum 'Love Yorself' BTS</a></div>
            <div><a href="#"><img src="img//bts/cards1.jpg" alt="Cards 'Love Yourself E' BTS"/>Cards 'Love Yourself E' BTS</a></div>
            <div><a href="#"><img src="img//bts/poster1.jpg" alt="Poster BTS"/>Poster BTS</a></div>
            <div><a href="#"><img src="img//bts/chaveiro1.jpg" alt="Chaveiros Integrantes BTS"/>Chaveiros Integrantes BTS</a></div>
        </div>
        
        <div class="footer">
        <table>
            <tbody>
                <tr class = "lala">
                    <td>Contato</td>
                    <td>Horário de Atendimento</td>
                    <td>Siga a gente!</td>
                </tr>
                <tr>
                    <td>(011)4485-9877</td>
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
