<!doctype html>
<html>
	<head>
		<title>Insert cilent</title>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<?php
			include "../../common/connexion_bdd.php";
			
			$statement = $pdo->prepare("INSERT INTO clients (NOM, PRENOM) VALUES (:prenom, :nom)");
			$statement->bindParam(':prenom', $_POST["prenom"]);
			$statement->bindParam(':nom', $_POST["nom"]);
			
			$statement->execute();
			
			header('Location: ../ajouter_client.php');
		?>
	</body>
</html>