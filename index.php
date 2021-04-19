<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" />
	</head>

<body>
	
<header>
	<a href="index.php"><img src="src/img/logo.jpg" class="logo" /></a>
	<a href="http://www.restaurantleradisbeurre.com/fr/index.php" class="header-link" target="_blank">Le restaurant</a>
	<div style="width: 200px;"></div>
	<a href="#reserver" class="header-link">Je réserve</a>
</header>

<div class="container">
	<div class="all">
		<div class="infos">
			<h2 class="infos-h2">Le principe</h2>
			<p id="reserver" class="infos-p">Le chef et son équipe vous propose ce système de réservation en ligne. En effet, vous pouvez, dès à présent, réserver votre table; un email vous sera envoyé lorque la réservation sera effectuée.</p>
		</div>
		<img  src="src/img/01.jpg" class="img" />
	</div>

	<br>
	<br>
	<br>


	<div class="formulaire">
		<form method="POST">
			<h2 class="form-titre">Je réserve</h2>
			<br>
			<form method="POST">
				<input type="text" class="input" placeholder="Nom"/>
				<br>
				<br>
				<input type="text" class="input" placeholder="Prénom"/>
				<br>
				<br>
				<input type="text" class="input" placeholder="Numéro de téléphone" />
				<br>
				<select list="nbpers" type="number" class="input" placeholder="Nombre de personnes" max="6" min="1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
				<br>
				<input type="submit" class="submit" value="Valider" />
				<br>
				<br>
			</form>
		</form>
	</div>
</div>

<br>
<br>
<br>
<br>


<footer>
	<img src="src/img/logo.jpg" class="logo-footer"/>

	<div class="more">
		<p class="more-infos">Le Radis Beurre <br><br>51, boulevard Garibaldi<br>75015 Paris<br>Tél. : +33 (0)1 40 33 99 26
	</div>
</footer>

</body>
</html>