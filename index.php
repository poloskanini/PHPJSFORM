<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropplist | Increase sales with email marketing</title>
  <link rel="icon" href="/assets/images/favicon.png">
  <!-- BootStrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="/assets/style.css">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="nav d-flex justify-content-around align-items-center p-2 my-4">
        <div class="logo">
            <img src="/assets/images/logo.png" alt="logo">
        </div>
        <ul class="nav-list d-flex list-unstyled d-none d-lg-flex">
            <li class="nav-item nav-item1 p-4">Platform</li>
            <li class="nav-item nav-item2 p-4">Resources</li>
            <li class="nav-item nav-item3 p-4">Solutions</li>
            <li class="nav-item nav-item4 p-4">Pricing</li>
        </ul>
        <div class="sign-up">SIGN UP</div>
    </nav>

    <div class="container d-md-flex justify-content-center align-items-center mt-5">

        <div class="left">
            <img class="img-fluid" src="/assets/images/left.png" alt="left">
        </div>

        <div class="middle">
            <h1 class="middle-title m-3 mb-5">Increase sales with email marketing</h1>
            <p class="middle-subtitle m-3 mb-5">Automate email marketing campaigns and make them look awesome for your clients.</p>

            <form action="contact.php" method="POST" class="row g-3 needs-validation" id="lessonForm">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Entrez votre prénom">
                    <div class="invalid-feedback">
                        Veuillez saisir un prénom valide.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Entrez votre nom">
                    <div class="invalid-feedback">
                        Veuillez saisir un nom valide.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre e-mail">
                    <div class="invalid-feedback">
                        Veuillez saisir un e-mail valide.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="phoneNumber" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Entrez votre téléphone">
                    <div class="invalid-feedback">
                        Veuillez saisir un numéro de téléphone valide.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Entrez votre adresse">
                    <div class="invalid-feedback">
                        Veuillez saisir une adresse valide.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="postcode" class="form-label">Code postal</label>
                    <input type="text" class="form-control" name="postCode" id="postCode" placeholder="Entrez votre code postal">
                    <div class="invalid-feedback">
                        Veuillez saisir un code postal valide.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">Ville</label>
                    <select class="form-select" name="city" id="city">
                        <option selected disabled value="">Choisir une ville</option>
                        <option>Paris</option>
                        <option>Lyon</option>
                        <option>Marseille</option>
                        <option>Lille</option>
                    </select>
                    <div class="invalid-feedback">
                        Veuillez choisir une ville valide.
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-end">
                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="conditions">J'accepte les conditions</label>
                        <input type="checkbox" class="form-check-input" id="conditions" name="conditions">
                        <div class="invalid-feedback">
                            Merci de lire les conditions avant de valider le formulaire.
                        </div>
                    </div>
                </div>
                <div class="button col d-flex justify-content-center mt-5">
                    <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark w-25">Valider</button>
                </div>

            </form>

        </div>

        <div class="right d-none d-md-flex">
            <img class="img-fluid" src="/assets/images/right.png" alt="right">
        </div>
    </div>

    <footer class="footer d-flex justify-content-around align-items-center">
        <ul class="nav-list d-flex list-unstyled">
            <li class="footer-item">
                <img class="img-fluid" src="/assets/images/footerleft.png" alt="footerleft">
                Hit the right audience with the right tools
            </li>
            <li class="footer-item footer-item-middle">
                <img class="img-fluid" src="/assets/images/footermiddle.png" alt="footerleft">
                Customize templates and create unique campaigns
            </li>
            <li class="footer-item">
            <img class="img-fluid" src="/assets/images/footerleft.png" alt="footerright">Reach goals on every communication channel</li>
        </ul>
    </footer>

<script src="assets/scriptbis.js"></script>
</body>
</html>