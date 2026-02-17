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
                    Texte
                </th>
                 <th>
                    Texte
                </th>
                 <th>
                    Texte
                </th>
                 <th>
                    Texte
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
                                <?php print($matériel['nom']) ?>
                            </a>
                        </td>
                        <td>
                            <?php print($matériel['texte']) ?>
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
