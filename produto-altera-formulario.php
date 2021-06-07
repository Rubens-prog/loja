<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id= $_GET['id'];
$produto = BuscaProduto($conexao, $id);
$categorias= ListaCategoria($conexao);
$usado=$produto['usado'] ?"checked= 'checked'":"";

?>


	<h1>Alterando Produtos</h1>	
	<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
			<tr>
				<td>NOME:</td>
				<td><input class="form-control" type="text" name="nome"
				 value="<?= $produto['nome']?>"></td>

			</tr>
			<tr>	
				<td>PREÇO:</td>
				<td><input class="form-control" type="number" name="preco" 
					value="<?= $produto['preco']?>"></td>
			</tr>
			<tr>	
				<td>DESCRIÇÃO:</td>
				<td><textarea class="form-control" name="descricao"><?= $produto['descricao']?></textarea></td>
			</tr>
			<tr>
				<td></td>
					<td><input type="checkbox" <?=$usado?> name="usado" value="true">Usado
			</tr>
			<tr>
				<td>CATEGORIA</td>
				<td>
					<select class="form-control" name="categoria_id">
						<?php foreach($categorias as $categoria) : 
							$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
							$selecao = $essaEhACategoria ? "selected='selected'" : "";
							?>
							<option value="<?=$categoria['id']?>" <?=$selecao?>>
								<?=$categoria['nome']?>
							</option>	
						<?php endforeach?>	
					</select>
				</td>
				
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Alterar</button></td>
			</tr>
		</table>

		</form>

<?php include("rodape.php")?>
