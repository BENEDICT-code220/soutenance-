<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body bg-light>
    <div class="bg-primary container-fluid">
        <h4><div class="fs-4 fs-md-6 fs-lg-1 ">MAXWELL TECHNOLOGIES</div></h4>
    </div>

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6 col-lg-4">
      <div class="card shadow p-4">

        <h2 class="text-center text-primary mb-4">Connexion</h2>

        
        <form method="POST" action="connexion.php">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Se souvenir de moi</label>
          </div>

          <div class="d-grid">
            <input type="submit" class="btn btn-primary" name="login" value="Se connecter" >
          </div>

        </form>

      </div>
    </div>
  </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>