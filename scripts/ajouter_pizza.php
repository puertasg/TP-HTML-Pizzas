<!doctype html>
<html>
	<head>
		<title>Ajout pizza</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../css/breadcrumb_nav.css">
	</head>
	
	<body>
		<h2>Gestion des pizzas</h2>
		
		<ul class="breadcrumb">
			<li><a href="../index.html">Accueil</a></li>
			<li><a href="./ListerPizzas.php">Lister pizzas</a></li>
			<li>Ajout pizza</li>
		</ul>
		
		<h3>Création d'une pizza</h3>
		<form action="./inserts/insert_pizza.php" method="POST">
			<label for="input_libelle">Libellé: </label>
			<input type="text" id="input_libelle" name="libelle" placeholder="Libellé" required /><br>
			
			<label for="input_reference">Référence: </label>
			<input type="text" id="input_reference" name="reference" placeholder="Reférence" required /><br>
			
			<label for="input_prix">Prix: </label>
			<input type="text" id="input_prix" name="prix" placeholder="Prix" required /><br>
			
			<label for="input_image">Image: </label>
			<input type="file" id="input_image" name="image" required /><br>
			
			<input type="submit" value="Ajouter"/>
		</form>
	</body>
</html>