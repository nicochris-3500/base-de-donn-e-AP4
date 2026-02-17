<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Boîte à idées
        </title>
    </head>
    <body>
    <?php

            require('credentials.php');
            $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);
   
            $requete = $connexion->prepare('select * from Matériel_m2l');
            $requete->execute();
            $matériels = $requete->fetchAll();
        ?>
    <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nom
                </th>
                 <th>
                    Année
                </th>
                 <th>
                    Détails
                </th>
                 <th>
                    Type
                </th>
                 <th>
                    Appartenance
                </th>
            </tr>
            <?php
  
                foreach ($matériels as $matériel)
                {
                    $url = "show.php?id=" . $matériel['id'];
                    ?>
                    <tr>
                        <td>
                            <a href="<?php print($url) ?>">
                                <?php print($matériel['ID']) ?>
                            </a>
                        </td>
                        <td>
                            <?php print($matériel['Nom']) ?>
                        </td>
                          <td>
                            <?php print($matériel['Année']) ?>
                        </td>
                          <td>
                            <?php print($matériel['Détails']) ?>
                        </td>
                          <td>
                            <?php print($matériel['Type']) ?>
                        </td>
                          <td>
                            <?php print($matériel['Appartenance']) ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <form method="post" action="insert.php">
            <input name="nom">
            <br>
            <textarea name="texte"></textarea>
            <br>
            <input type="submit" value="Ajouter une idée">
        </form>
    </body>
</html>
