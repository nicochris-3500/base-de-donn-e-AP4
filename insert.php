<?php
    
    require('code.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);
    
    if (isset($_POST['nom']) || isset($_POST['texte']))
    {
      $chaine = "insert into matériel_m2l (ID, Nom, Année, Détails, Type, Appartenace) values('" . $_POST['ID'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Anné'] . "', '" . $_POST['Détails'] . "', '" . $_POST['Type'] . "', '" . $_POST['Appartenance'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>
