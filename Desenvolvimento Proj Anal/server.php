<?php
session_start();

// inicializa as variaveis
$username = "";
$nome ="";
$sobrenome ="";
$email    = "";
$cpf ="";
$endereco ="";
$cep ="";
$telefone ="";
$id="";
$errors = array(); 

// conecta com o banco de dados
$db = mysqli_connect('localhost', 'root', '', 'registration');
// CADASTRAR USUARIO
if (isset($_POST['reg_user'])) {
  // TODOS OS VALORES DO FORMULARIO DE REGISTRO
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $nome = mysqli_real_escape_string($db, $_POST['nome']);
  $sobrenome = mysqli_real_escape_string($db, $_POST['sobrenome']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $cpf = mysqli_real_escape_string($db, $_POST['cpf']);
  $endereco = mysqli_real_escape_string($db, $_POST['endereco']);
  $cep = mysqli_real_escape_string($db, $_POST['cep']);
  $telefone = mysqli_real_escape_string($db, $_POST['telefone']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username é necessário para fazer o cadastro"); }
  if (empty($nome)) { array_push($errors, "nome é necessário para fazer o cadastro"); }
  if (empty($sobrenome)) { array_push($errors, "sobrenome é necessário para fazer o cadastro"); }
  if (empty($email)) { array_push($errors, "Email é necessário para fazer o cadastro"); }
  if (empty($password_1)) { array_push($errors, "Senha é necessário para fazer o cadastro"); }
  if ($password_1 != $password_2) {
	array_push($errors, "As duas senhas não iguais!");
  }

  if (empty($cpf)) { array_push($errors, "cpf é necessário para fazer o cadastro"); }
  if (empty($endereco)) { array_push($errors, "endereco é necessário para fazer o cadastro"); }
  if (empty($cep)) { array_push($errors, "cep é necessário para fazer o cadastro"); }
  if (empty($telefone)) { array_push($errors, "telefone é necessário para fazer o cadastro"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR cpf='$cpf' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Já existe um cadastro com esse username");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Já existe um cadastro com esse email");
    }

    if ($user['cpf'] === $cpf) {
      array_push($errors, "Já existe um cadastro com esse cpf");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, nome, sobrenome, email, password, cpf, endereco, cep, telefone) 
  			  VALUES('$username', , '$nome', '$sobrenome' ,'$email', '$password', 'cpf', '$endereco', '$cep', '$telefone')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Agora você está logado !";
  	header('location: index_logado.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "É necessário preencher o nome de usuário ");
  }
  if (empty($password)) {
    array_push($errors, "É necessário preencher a Senha");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Você agora está logado!";
      header('location: index_logado.php');
    }else {
      array_push($errors, "Nome ou Senha incorreta");
    }
  }
}



// inicializa as variaveis
$id_prod ="";
$nome_pro = "";
$tipo  = "";
$preco_produto = "";
$tags ="";
$quantidade = "";

$errors = array(); 

// conecta com o banco de dados
// CADASTRAR USUARIO
if (isset($_POST['reg_pro'])) {
  // TODOS OS VALORES DO FORMULARIO DE REGISTRO
  $nome_pro = mysqli_real_escape_string($db, $_POST['nome_pro']);
  $tipo = mysqli_real_escape_string($db, $_POST['tipo']);
  $preco_produto = mysqli_real_escape_string($db, $_POST['preco_produto']);
  $tags = mysqli_real_escape_string($db, $_POST['tags']);
  $quantidade = mysqli_real_escape_string($db, $_POST['quantidade']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nome_pro)) { array_push($errors, "nome_pro é necessário para fazer o cadastro"); }
  if (empty($tipo)) { array_push($errors, "tipo é necessário para fazer o cadastro"); }
  if (empty($preco_produto)) { array_push($errors, "preco_produto é necessário para fazer o cadastro"); }
  if (empty($tags)) { array_push($errors, "tags é necessário para fazer o cadastro"); }
  if (empty($quantidade)) { array_push($errors, "quantidade é necessário para fazer o cadastro"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $query = "INSERT INTO produ (nome_pro, tipo, preco_produto, tags,quantidade) 
          VALUES('$nome_pro', '$tipo', '$preco_produto', '$tags', '$quantidade')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Produto Cadastrado com sucesso!";
    header('location: index_logado.php');
  }
}


if(isset($_POST['update'])){
  $id_prod = $_POST['id_prod'];
  $nome_pro= mysqli_real_escape_string($db, $_POST['nome_pro']);
  $tipo = mysqli_real_escape_string($db, $_POST['tipo']);
  $preco_produto= mysqli_real_escape_string($db, $_POST['preco_produto']);
  $tags = mysqli_real_escape_string($db, $_POST['tags']);
  $quantidade= mysqli_real_escape_string($db, $_POST['quantidade']);


  if (empty($nome_pro)) { array_push($errors, "Nome do produto é necessário"); }
  if (empty($tipo)) { array_push($errors, "Tipo é necessário"); }
  if (empty($preco_produto)) { array_push($errors, "Nome do produto é necessário"); }
  if (empty($tags)) { array_push($errors, "tags é necessário"); }
  if (empty($quantidade)) { array_push($errors, "A quantidade é necessário"); }

  if (count($errors) == 0) {
    $sql_ = "UPDATE produ SET nome_pro = '$nome_pro' , tipo = '$tipo' , preco_produto = '$preco_produto' , tags = '$tags' , quantidade = '$quantidade' WHERE id_prod = '$id_prod'";
     mysqli_query($db, $sql_);

      $_SESSION['sucess'] = "Produto Alterado com sucesso"; 
      header('location: muda-pro.php');

  }

  if (isset($_POST['del'])) {
  $id_prod = $_POST['del'];
  $leolixo = "DELETE FROM produ WHERE id_prod=$id_prod";
  mysqli_query($db, $leolixo);
  $_SESSION['sucess'] = "Produto deletado!"; 
  header('location: index_logado.php');
}
}



?>