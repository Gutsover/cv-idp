<?php
//echo "Bonjour " . $_POST['nom'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cvidp;charset=utf8','root','');
    // Connexion Mysql
}

catch(Exeption $e) {
    die('Erreur : ' . $e->getMessage());
    //Si erreur affiche...
}

$req = $bdd->prepare('INSERT INTO contact (prenom,nom,email,message) VALUES (?, ?, ?, ?)');

$req->execute(array($_POST['prenom'],$_POST['nom'],$_POST['email'],$_POST['message']));

echo "Votre message a bien était envoyé!";

//$reponse->closeCursor(); //Ferme la connexion SQL

?>
<p>Retournez sur  <a href="index.php">le CV de Mylène</a></p>

