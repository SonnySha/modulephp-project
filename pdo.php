<?php

try {
    // Connexion à la base de données "app"
    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur lors la connexion à la base de données : ' . $e->getMessage());
}

$query = "SELECT users.pseudo, users.mail, cities.nom 
        FROM users
        INNER JOIN cities 
            ON users.city_id = cities.id;";
$response = $bdd->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Utilisateurs inscrits</h1>
    <table>
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Mail</th>
                <th>Ville</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($user = $response->fetch())
                {
            ?>
            <tr>
                <td>
                    <?php echo $user[ 'pseudo' ]; ?>
                </td>
                <td>
                    <?= $user[ 'mail' ]; ?>
                </td>
                <td>
                    <?= $user[ 'nom' ]; ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

    <h1>Inscription</h1>
    <form action="account_signup.php" method="post">
        <p>
            <label for="pseudo">Pseudo</label>
            <br />
            <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo">
        </p>
        <p>
            <label for="mail">Votre mail</label>
            <br />
            <input type="text" name="mail" id="mail" placeholder="Entrez votre mail">
        </p>
        <p>
            <label for="password">Mot de passe</label>
            <br />
            <input type="text" name="password" id="password" placeholder="Entrez votre mot de passe">
        </p>
        <p>
            <label for="password_confirmation">Confirmation mot de passe</label>
            <br />
            <input type="text" name="password2-user" id="password_confirmation" placeholder="Répétez le mot de passe">
        </p>
        <input type="submit" value="Inscription">
    </form>

    <h1>Connexion</h1>
    <form action="account_signin.php" method="post">
        <p>
            <label for="mail_user">Votre mail</label>
            <br />
            <input type="text" name="mail-user" id="mail_user" placeholder="Entrez votre mail">
        </p>
            <label for="password">Mot de passe</label>
            <br />
            <input type="text" id="password" name="password-connection" placeholder="Entrez votre mot de passe">
        </p>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>

<?php
$response->closeCursor();
?>