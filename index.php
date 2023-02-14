<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.

$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'base_exercice';

try {

    $maConnexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pwd);
    $maConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $maConnexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    /* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
    // TODO votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE nom = 'Conor'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE prenom != 'John'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE id <= 2");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE id >= 2");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE id = 1");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE id > 1 AND nom = 'Doe'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE nom = 'Doe' AND prenom = 'John'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE nom = 'Conor' OR prenom = 'Jane'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user LIMIT 2");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user ORDER BY id ASC LIMIT 1");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE nom LIKE 'C___r'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE nom LIKE '%e%'");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE prenom IN ('John', 'Sarah')");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

    /* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
    // TODO Votre code ici.

    $pom = $maConnexion->prepare("SELECT * from user WHERE id BETWEEN 2 AND 4");

    $state = $pom->execute();

    if($state) {
        foreach($pom->fetchAll() as $user) {
            echo "<div>Personne " . $user['id'] . ":" . $user['nom'] . " " . $user['prenom'] . " " . $user['rue'] . " " . $user['numero'] . " " . $user['code_postal'] . " " . $user['ville'] . " " . $user['pays'] . " " . $user['mail'] . "</div>";
        }
    }
    else {
        echo "Une erreur est survenue en récupérant les données de la table.";
    }

}
catch (PDOException $exception) {
    echo "Erreur de connexion: " . $exception->getMessage();
}