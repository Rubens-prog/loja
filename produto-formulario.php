<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias= ListaCategoria($conexao);
?>


	<h1>Formulário de Produtos</h1>
	<div class="container">
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>NOME:</td>
				<td><input class="form-control" type="text" name="nome"></td>	
			</tr>
			<tr>	
				<td>PREÇO:</td>
				<td><input class="form-control" type="number" name="preco"></td>
			</tr>
			<tr>	
				<td>DESCRIÇÃO:</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>
			<tr>
				<td></td>
					<td><input type="checkbox" name="usado" value="true">Usado
			</tr>
			<tr>
				<td>CATEGORIA</td>
				<td>
					<select class="form-control" name="categoria_id">
						<?php foreach($categorias as $categoria) : ?>
							<option   value="<?=$categoria['id']?>">
								<?=$categoria['nome']?>
							</option>	
						<?php endforeach?>	
					</select>
				</td>
				
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
			</tr>
		</table>

		</form>
	</div>
<?php include("rodape.php")?>
