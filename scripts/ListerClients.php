<!doctype html>
<html>
	<head>
		<title>Lister clients</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../css/breadcrumb_nav.css">
	</head>
	<body>
		<h2>Gestion des clients</h2>
		
		<ul class="breadcrumb">
			<li><a href="../index.html">Accueil</a></li>
			<li>Lister clients</li>
		</ul>
		
		<?php
			include "../common/connexion_bdd.php";
		?>
		
		<table>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prénom</th>
			</tr>
			<?php
				$statement = $pdo->prepare("SELECT * FROM clients");
				$statement->execute();
				
				while($client = $statement->fetch()) 
				{
					echo '<tr>
							<td>'.$client["id"].'</td>
							<td>'.$client["NOM"].'</td>
							<td>'.$client["PRENOM"].'</td>
							<td>
								<form action="./modifier_client.php" method="POST">
									<input type="hidden" name="id" value="'.$client["id"].'" />
									<input type="submit" value="Modifier"/>
								</form>
							</td>
							<td>
								<form action="./deletes/delete_client.php" method="POST">
									<input type="hidden" name="id" value="'.$client["id"].'" />
									<input type="submit" value="Supprimer"/>
								</form>
							</td>
						  </tr>';
				}
			?>
		</table>
		<a href="./ajouter_client.php">Ajouter un client</a>
	</body>
</html>