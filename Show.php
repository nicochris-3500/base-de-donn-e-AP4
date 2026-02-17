<?php

    if (!isset($_GET['id']) || !is_numeric($_GET['id']))
        header("Location:.");

    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    $chaine = 'select * from matériel_m2l where id = ' . $_GET["id"];
    $requete = $connexion->prepare($chaine);
    $requete->execute();
    $matériel = $requete->fetch();

    if (!$matériel)
        header("Location:.");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Boîte à idées
        </title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    ID :
                </td>
                <td>
                  <?php print($matériel["ID"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nom :
                </td>
                <td>
                  <?php print($matériel["Nom"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Année :
                </td>
                <td>
                  <?php print($matériel["Année"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Détails :
                </td>
                <td>
                  <?php print($matériel["Détails"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Type :
                </td>
                <td>
                  <?php print($matériel["Type"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Appartenance :
                </td>
                <td>
                  <?php print($matériel["Appartenance"]) ?>
                </td>
            </tr>
        </table>
        <a href=".">Retour</a>
    </body>
</html>
