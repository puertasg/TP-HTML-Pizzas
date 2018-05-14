<!doctype html>
<html>
	<head>
		<title>Ajout commande</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../css/breadcrumb_nav.css">
	</head>
	
	<body>
		<h2>Gestion des commandes</h2>
		
		<ul class="breadcrumb">
			<li><a href="../index.html">Accueil</a></li>
			<li><a href="./ListerCommandes.php">Lister commandes</a></li>
			<li>Ajout commande</li>
		</ul>
		
		<h3>Ajout d'une commande</h3>
		<form action="./inserts/insert_pizza.php" method="POST">
			<label for="input_numero">Numéro: </label>
			<input type="text" id="input_numero" name="numero" placeholder="Numéro" required /><br>
			
			<label for="input_date">Date: </label>
			<input type="date" id="input_date" name="date" required /><br>
			
			<label for="input_livreur">Livreur: </label>
			<select id="input_livreur" name="livreur" required>
				<option value="Lionel ARMAND">Lionel Armand</option>
			</select><br>
			
			<label for="input_client">Client: </label>
			<select id="input_client" name="client" required>
				<option value="Sophie ARMANI">Sophie ARMANI</option>
			</select><br>
			
			<input type="submit" value="Ajouter"/>
		</form>
	</body>
</html>