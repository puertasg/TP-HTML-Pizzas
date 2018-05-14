<!doctype html>
<html>
	<head>
		<title>Ajouter client</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../css/breadcrumb_nav.css">
	</head>
	
	<body>
		<h2>Gestion des clients</h2>
		
		<ul class="breadcrumb">
			<li><a href="../index.html">Accueil</a></li>
			<li><a href="./ListerClients.php">Lister clients</a></li>
			<li>Ajout client</li>
		</ul>
		
		<h3>Création d'un client</h3>
		<form action="./inserts/insert_client.php" method="POST">
			<label for="input_nom">Nom: </label>
			<input type="text" id="input_nom" name="nom" align="right" placeholder="Nom" required /><br>
			
			<label for="input_prenom">Prénom: </label>
			<input type="text" id="input_prenom" name="prenom" placeholder="Prénom" required /><br>
			
			<input type="submit" value="Ajouter"/>
		</form>
	</body>
</html>