<?php include("conecta.php")?>
<?php include("banco-usuario.php");

$usuario= buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario== null) {
    header("Location: index.php?login=0");
} else {
    header("Location: index.php?login=1");
    setcookie("usuario-logado", $usuario["email"], time() + 60 );
}
die();



