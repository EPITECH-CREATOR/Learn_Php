<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    
    <form action="" method="post"> <!-- Mettre dans action le chemin vers le fichier que le formulaire utilisera pour exécuter son action. -->
        <div class="field input">
            <label>Pseudo</label>
            <input type="text" name="pseudo" placeholder="Ton pseudo..."  required>
        </div>


        <div class="field input">
            <label>Addresse Email</label>
            <input type="text" name="email" placeholder="Ton addresse email..." required>
        </div>


        <div class="field input">
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Ton mot de passe..." required>
        </div>


        <div class="field input">
            <label>Confirmer le mot de passe</label>
            <input type="password"  name="password_retype" placeholder="Ton mot de passe..." required>
        </div>

        <div class="field button">
            <input type="submit" value="Se connecter">
        </div> 
    </form>

</body>
</html>