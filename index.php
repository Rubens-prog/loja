<?php include("cabecalho.php")?>
<?php if (isset($_GET["login"]) && $_GET["login"]==true) {?>
	<p class="text-success">Logado com sucesso!</p>
<?php }?>
<?php if (isset($_GET["login"]) && $_GET["login"]==false) {?>
	<p class="text-danger">Usuário ou senha inválido</p>
<?php }?>
			<h1>Bem Vindo!</h1>

			<?php if(isset($_COOKIE["usuario-logado"])) {?>
				<p class="text-success" >Você está logado como:
<?=$_COOKIE["usuario-logado"] ?>.</p>
			<?php }else{ ?>
			<h2>Login</h2>
			<form action="login.php" method="post">	
			<table class="table">
				<tr>
					<td> Email:</td>
					<td><input type="email" class="form-control" name="email"></td>
				</tr>
				<tr>
					<td>Senha:</td>
					<td><input type="password" name="senha" class="form-control" ></td>
				<tr>
					<td><button type="submit" class="btn btn-primary">Logar</button></td>
				</tr>
			</table>
			</form>
			<?php }?>


<?php include("rodape.php")?>
