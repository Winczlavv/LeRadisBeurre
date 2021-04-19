<?php

$bdd = new PDO('mysql:host=localhost;dbname=LRB;charset=utf8', 'root', '');

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/layout_admin/admin.css" />
		<title>Connexion</title>
	</head>

<body>



<?php

$affiche = False;
if(isset($_POST['validate'])){
    if(empty($_POST['pseudo']) || empty($_POST['mdp'])){
        $error = "Veuillez remplir tous les champs";
    }
    else{
        $req = $bdd->prepare('SELECT * FROM membre WHERE pseudo = ? AND mdp = ?');
        $req->execute(array($_POST['pseudo'], $_POST['mdp']));

        $req_don = $req->fetch();
        if($req_don['pseudo'] == $_POST['pseudo'] && $req_don['mdp'] == $_POST['mdp']){
            $affiche = True;
        }
        else{
            $error = "Identifiant ou mot de passe incorrect";
        }
    }
}




?>





<?php


if($affiche == True){
    require('./layout_admin/admin_affiche.php');
}
else{
?>
    <form method="POST">
        <p class="error"><?php echo $error; ?></p>
        <input type="text" class="input" placeholder="Nom d'utilisateur" name="pseudo"/>
        <input type="password" class="input" placeholder="Mot de passe" name="mdp"/>
        <input type="submit" class="valider" value="Valider" name="validate">
    </form>
<?php
}


?>













</body>
</html>