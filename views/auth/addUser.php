<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["success"])) {
            echo "<strong style='color:green'>Enregistrement effectué avec succès</strong>";
        }
        if (isset($_GET["erreurMdp"])) {
            echo "<strong style='color:red'>Les mots de passe ne sont pas identique</strong>";
        }
        if (isset($_GET["erreurDoublon"])) {
            echo "<strong style='color:red'>Cet addresse mail existe déjà dans la bas de donnée</strong>";
        }
    ?>
    
    <form action="index.php?controller=Auth&action=signUp" method="post">
        <input type="text" placeholder="Nom" name="nom"><br>
        <input type="text" placeholder="Prénom" name="prenom"><br>
        <input type="email" placeholder="Entrez votre mail" name="mail_user" required><br>
        <input type="password" placeholder="Entrez votre mot de passe" name="pw1"><br>
        <input type="password" placeholder="Confimez votre mot de passe" name="pw2"><br>
        <select name="type" id="">
            <option value="Admin">Administrateur</option>
            <option value="secretaire">secretaire / Caissiaire</option>
        
        </select><br>
        <input type="submit" value="S'inscrire" name="btn">
    </form>
</body>
</html>