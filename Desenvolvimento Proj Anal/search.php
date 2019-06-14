<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("registration") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <input type="submit" value="Search"/>
            </form>
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
    
    <?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 0;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM produ
            WHERE (`nome_pro` LIKE '%".$query."%') OR (`tipo` LIKE '%".$query."%')") or die(mysql_error());
              
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['nome_pro']."</h3>".$results['tipo']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
                 echo '<div><a href="#"><img src="img//bts/album1.jpg" ' .$row['nome_pro'].'</a></div>';
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
        
        
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
    

</body>
</html>