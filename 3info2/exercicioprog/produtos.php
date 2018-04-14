
<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<body>
	
	<?php

		////////////////////////////////////////////////////      P O S T             /////////////////////////////////////////////////////////////////
		if (isset($_POST['pesquisa'])) {

			$busca = $_POST['pesquisa'];
			
			echo ('<p>Voce buscou pelo termo "'.$busca.'" </p>');

		}

		////////////////////////////////////////////////////      G E T               /////////////////////////////////////////////////////////////////

		if (isset($_GET['categoria'])) {

			$categoria = $_GET['categoria'];

			switch ($categoria) {

				case '1':
					echo "VOCE ESTA EM ELETRONICOS";
				break;

				case '2':
					echo "VOCE ESTA EM ESPORTES";
				break;

				case '3':
					echo "VOCE ESTA EM MOVEIS";
				break;

				case '4':
					echo "VOCE ESTA EM ROUPAS";
				break;
			
			}
	}


	$senha = "12345";
	$user = "admin";

	?>

</body>
</html>


	


	
	

	






