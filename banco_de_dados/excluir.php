<?php
    
    include_once "conexao.php";

	//código do item a ser excluido
	$codigo = $_GET['cod'];
	//Criando sql
	$sql = "DELETE FROM cliente WHERE cod_cliente = :id";
	//iniciando a instrução
	$comando = $con->prepare($sql);
	//passando valores para cada parâmetro
	$comando->bindParam(":id",$codigo);
	//Executando instrução
	if ($comando->execute()) {
		echo "<script>
			alert('Registro excluído com sucesso');
		</script>";
	} else{
		echo "<script>
			alert('Erro ao excluir, tente novamente');
		</script>";
	}

?>
<meta http-equiv="refresh" content="0;url=../listar.php">