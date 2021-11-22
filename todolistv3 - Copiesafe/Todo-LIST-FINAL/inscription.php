<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
    <title>Mytotool </title>
    <link rel="stylesheet" href="./dist/css/main.min.css">

</head>

<body>
    <div class="accueil">
        <div class="connexion">
            <h1>Mytotool</h1>
            <h2>Inscription</h2>
            <?php
            if (isset($_GET['reg_err'])) {
                $err = htmlspecialchars($_GET['reg_err']);
                switch ($err) {
                    case 'password':
            ?>
                        <div class="alert alert-danger">
                            <strong>Erreur mot de passe différent !</strong>
                        </div>
                    <?php
                        break;
                    case 'email':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur email invalide !</strong>
                        </div>
                    <?php
                        break;
                    case 'email_length':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur email trop long !</strong>
                        </div>
                    <?php
                        break;
                    case 'pseudo_length':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur pseudo trop long !</strong>
                        </div>
                    <?php
                        break;
                    case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur ce compte existe déjà !</strong>
                        </div>
            <?php
                        break;
                }
            }

            ?>
            <form method="POST" action="inscription_traitement.php">
                <input type="text" class="connexion__info" required="required" name="pseudo" placeholder="Votre pseudo">
                <input type="email" class=" connexion__info" required="required" name="email" placeholder="Votre email">
                <input type="password" class="connexion__info" required="required" name="password" placeholder="Votre mot de passe">
                <input type="password" class="connexion__info" required="required" name="password_retype" placeholder="Confirmez mot de passe">
                <input type="submit" class="connexion__boutton" placeholder="Se connecter">
            </form>

        </div>
    </div>

</body>

</html>