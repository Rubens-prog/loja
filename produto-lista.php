<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php"); ?>

<?php
if (array_key_exists("removido", $_GET) && $_GET["removido"]="true") {	
?>
	<p class="alert-success">Produto removido!</p>

<?php
}
?>







<table class="table table-striped table-bordered">
	<h1>Lista de Produtos</h1>
	<?php 
		$produtos = ListaProdutos($conexao);
		foreach($produtos as $produto) :
	?>
	<tr>
		<td><?php echo $produto ['nome']?></td>
		<td><?php echo $produto ['preco']?></td>
		<td><?php echo substr ($produto ['descricao'], 0, 40)?>...</td>
		<td><?= $produto ['categoria_nome']?></td>
		<td><a class="btn btn-primary"
href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
		<td>
			<form action= "remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?php echo $produto ['id']?>">
				<button class="btn btn-danger">remover</button>
			</form>
		</td>
	</tr>
<?php 
	endforeach	
?>
</table>


<?php include("rodape.php"); ?>
