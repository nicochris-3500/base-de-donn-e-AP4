<?php
    
    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);
    
    if (isset($_POST['ID']) || isset($_POST['Nom']) || isset($_POST['Année']) || isset($_POST['Détails']) || isset($_POST['Type']) || isset($_POST['Appartenance']))
    {
      $chaine = "insert into matériel_m2l (ID, Nom, Année, Détails, Type, Appartenance) values('" . $_POST['ID'] . "', '" . $_POST['Nom'] . "', '" . $_POST['Anné'] . "', '" . $_POST['Détails'] . "', '" . $_POST['Type'] . "', '" . $_POST['Appartenance'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>
