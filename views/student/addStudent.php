<?php

    $erreur_format='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Format invalide pour l\'année scolaire. Utilisez le format YYYY-YYYY !
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
    $erreur_doublon='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Cette année scolaire existe déjà!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
?>
<!DOCTYPE html>
<html lang="en">
<head> </head>
<body>
<div class="card">
<?php
        if (isset($_GET["erreur_format"])) {
          echo $erreur_format;
        }
        if(isset($_GET["erreur_doublon"])){
            echo $erreur_doublon;
        }
?>
<div class="card-body">
    <h5 class="card-title">Enregistrer un élève</h5>

    <!-- Floating Labels Form -->
    <form class="row g-3" method="POST" action="index.php?controller=Year&action=addYear">
        <div class="col-12">
            <label for="yourName" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="yourName" required>
            <div class="invalid-feedback">Entrez votre nom s'il vous plaît!</div>
        </div>

        <div class="col-12">
            <label for="yourName" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="yourName" required>
            <div class="invalid-feedback">Entrez votre prenom s'il vous plaît!</div>
        </div>

        <div class="col-12">
            <label for="yourEmail" class="form-label">Email</label>
            <input type="email" name="mail_user" class="form-control" id="yourEmail" required>
            <div class="invalid-feedback">Entrez votre mail s'il vous plaît!</div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-primary" value="Enregistrer" name="btn">
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        </form><!-- End floating Labels Form -->

            </div>
</div>
</body>
</html>