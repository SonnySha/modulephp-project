<?php
    $hashedPassword = '$2y$10$.MC1t5FWDCi.ZK6tMtmkH.l2UI0AvqsrLBRom73ydQQUT6IJOBG3y';

    // Si le password n'a pas été posté
    // ou s'il a été posté mais qu'il est incorrect
    if (!isSet($_POST['password']) 
            || (isSet($_POST['password']) && !password_verify($_POST['password'], $hashedPassword)))
    {

        // Si le mot de passe a été posté mais qu'il est incorrect
        if(isSet($_POST['password']) && !password_verify($_POST['password'], $hashedPassword)) {
            echo "Le mot de passe est incorret. Veuillez réessayer.";
        }
?>

<form action="password.php" method="post">
    <p>
        <label for="password">Mot de passe</label>
        <br />
        <input type="text" name="password" id="password" />
    </p>

    <p>
        <input type="submit" value="Valider" />
    </p>
</form>

<?php
    } else {
        echo "Le mot de passe est correct !";
        echo "Voici les informations confidentielles : ...";
    }
?>