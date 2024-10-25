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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
              <h5 class="card-title">Enregistrer une année</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="index.php?controller=Year&action=addYear">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="year" placeholder="Enregistrez une nouvelle année scolaire suivant le format YYYY-YYYY Ex: 2024-2025">
                    <label for="floatingName">Enregistrez une nouvelle année scolaire suivant le format YYYY-YYYY Ex: 2024-2025</label>
                  </div>
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