<?php
require
// inicializa as variaveis
$nome_pro = "";
$tipo    = "";
$id_pro="";
$errors = array(); 

// conecta com o banco de dados
$dbd = mysqli_connect('localhost', 'root', '', 'registration');
// CADASTRAR USUARIO
if (isset($_POST['reg_pro'])) {
  // TODOS OS VALORES DO FORMULARIO DE REGISTRO
  $nome_pro = mysqli_real_escape_string($db, $_POST['nome_pro']);
  $tipo = mysqli_real_escape_string($db, $_POST['tipo']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nome_pro)) { array_push($errors, "nome_pro é necessário para fazer o cadastro"); }
  if (empty($tipo)) { array_push($errors, "tipo é necessário para fazer o cadastro"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $pro_check_query = "SELECT * FROM produtos WHERE nome_pro='$nome_pro' OR tipo='$tipo' LIMIT 50";
  $resultado = mysqli_query($dbd, $pro_check_query);
  $produt = mysqli_fetch_assoc($resultado);
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO produtos (nome_pro, tipo) 
  			  VALUES('$nome_pro', '$tipo')";
  	mysqli_query($dbd, $query);
  	$_SESSION['success'] = "Produto Cadastrado com sucesso!";
  	header('location: register-pro.php');
  }
}
?>