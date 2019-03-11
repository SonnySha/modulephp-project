<?php
    // Déclaration du tableau 
    $availableMovies = [
        'Pulp fiction',
        'Les nouveaux sauvages',
        'The Shawshank redemption',
        'Nemo'
    ];

    // Affichage des films
    echo '<ol>';
    foreach ($availableMovies as $availableMovie) {
        echo '<li>';
        echo $availableMovie;
        echo '</li>';
    }
    echo '</ol>';
?>

<form action="movies.php" method="post">
    <p>
        <label for="numero-film">Numéro du film</label>
        <br />
        <input type="text" name="numero_film" id="numero-film" />
    </p>

    <p>
        <input type="submit" value="Valider" />
    </p>
</form>

<?php
    $noErrors = true;

    // Contrôles des champs du formulaires
    // Si le champ "Numéro du film" n'est pas défini
    if (!isSet($_POST['numero_film'])) {
        echo "Le champ « Numéro du film » n'est pas défini." . "<br />";
        $noErrors = false;
    } else {
        // Si le champ "Numéro du film" n'est pas renseigné
        if (empty(trim($_POST['numero_film']))) {
            echo "Le champ « Numéro du film » est vide." . "<br />";
            $noErrors = false;
        }
        // Si le champ "Numéro du film" n'est pas une valeur entière
        if (intval($_POST['numero_film']) == 0) {
            echo "Le champ « Numéro du film » n'est pas valide." . "<br />";
            $noErrors = false;
        }
        // Si le champ "Numéro du film" ne correspond à un élément de la liste de films
        if (intval($_POST['numero_film']) > count($availableMovies)) {
            echo "Le « Numéro du film » renseigné ( " .
                    $_POST['numero_film'] .
                    " ) n'existe pas." . "<br />";
            $noErrors = false;
        }
    }
    
    // Traitement des données
    // S'il n'y a eu aucune erreur
    if($noErrors) {
        $movieIndex = intval($_POST['numero_film']) - 1;
        echo "Le film sélectionné est " .
                $availableMovies[ $movieIndex ];
    }
?>
