<?php

  include_once 'Actions/inscriptionAction.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Candidature stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-header
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            height: 300px;
        }
        .demarche 
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            background-attachment:fixed;
        }
        .nnn 
        {
           background-color:white;
        }
        .b 
        {
            text-align:center;
           
        }
        .btn
        {
          width:100%;
          background-color:blue;
          color:white;
          font-weight:bolder;
        }
       .v 
       {
        background-color:rgb(218, 218, 240);
       }
       .n
        {
            background-color: #ffc109 !important;
            height: 200px;
        }
        
.nav {
    width: 95%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: auto;
    margin-top: 5px;
}


.nav ul {
    display: flex;
    justify-content: space-around;
    align-items: center;
    list-style: none;
    flex-grow: 0.3;
    height: 57px ;
}
.nav .state {
    height: 57px ;

}
.nav .state button {
    width: 120px;
    height: 35px;
    font-weight: bold;
    margin: 0px 7px;
    border: 0px;
    border-radius: 8px;
}

.nav .state button:nth-child(1) {
  
    background-color: white;
    color: black;
    border: 2px solid gray;
}
.nav .state button:nth-child(2) {
  
    background-color: black;
    color: white;
}
.nav  .logo {
    padding-bottom:10px
}
.nav  .logo img {
    width: 53px;
    height: 64px;
    position:reltive;
    bottom:5px
}


.nav ul li span {
    color:black ;
    font-weight:bold ;
    width:100%;
    height:100%
}

.nav ul li {
    flex-grow: 0.5;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 4px;
    width: 70px;
    height: 100%;
    border-radius: 8px;   
}


.nav ul li:hover {
    background-color: rgb(240, 240, 240) ;
    color: black;
    cursor: pointer;
}


.nav .state  button:nth-child(1):hover{
    background-color: rgb(242, 238, 238);
    color: black;
}

.para {
    width: 200px;
    margin: auto;
    background-color: rgb(218, 132, 132);
}
ul li span a {
    color: black !important;
    width:100%;
    height:100%;
  display:flex;
  justify-content:center;
  align-items:center;
  text-decoration:none !important;
  
} 
    </style>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-warning" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="nav">
        <div class="logo"><img src="./Logo CRO_0 (1).png" alt=""></div>
        <ul id="nav-menu">
            <li><span><a href="#accueil">Accueil</a></span></li>
            <li><span><a href="#propos">A propos</a></span></li>
            <li><span><a href="theOffers.php">Offers</a></span></li>
            <li><span><a href="#contact">Contacts</a></span></li>
        </ul>

        <div class="state">
            <button><a href="inscription.php">s'inscrire</a></button>
            <button>se connecter</button>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container p-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <h3 id="welcomeText" class="display-4 mb-3 animated slideInDown b text-center text-light"></h3>
                    <p class="text-white">Avant de pouvoir déposer votre candidature, nous vous invitons à créer un compte sur notre plateforme. Cela vous permettra de bénéficier de fonctionnalités avancées et de suivre l'état de vos candidatures en temps réel</p>
    </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- debut formulaure -->
<div class="">
<div class="container ">
  <div class="row justify-content-center">
    <div class="col-md-6"> <br>
     
      <h2 class="text-center text-dark">Formulaire d'inscription</h2>
      <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12"> <br>
        <div>
        <?php
          if(isset($existe)){
            echo $existe;
          }elseif(isset($succes)){
            echo $succes;
          }
        ?>
      </div>
      <form class="p-3" id="registrationForm" action="" method="POST" onsubmit="return validatePasswords()">
        <div class="row">
          <div class="col-lg-12">
            <div class="bg-white shadow border  p-4">
              <h3 class="text-center">Informations personnelles</h3>
            <div class="form-group bg-white">
              <label class="text-dark">Nom :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text border-2"><i class="bi bi-person"></i></span>
                </div>
                <input class="border-2 bg-light shadow  form-control" type="text" name="nom" id="nom" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="text-dark">Prénom :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text border-2"><i class="bi bi-person"></i></span>
                </div>
                <input class="border-1 shadow bg-light  border-2 form-control" type="text" name="prenom" id="prenom" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="text-dark">Email :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                </div>
                <input class="border-1 shadow bg-light  border-2 form-control" type="email" name="email" id="email" class="form-control" required>
              </div>
            </div>
            <form>
            <label for="telephon" class="text-dark">Numéro de téléphone :</label><br>
            <div class="input-group">
              <div class="input-group-prepend">
                 <span class="input-group-text"><i class="bi bi-telephone"></i></span>
               </div>
              <input type="tel" maxlength="10" id="telephon" name="telephon" class="border-1 shadow bg-light  border-2 form-control"  class="form-control" required>
              </div>
            <small>Format : +212XXXXXXXXX</small><br>
            </span>
            </form>
            <div class="form-group">
              <label class="text-dark">Sexe :</label>
              <select name="sexe" id="sexe" class="border-1 shadow  bg-light border-2 form-control" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
              </select>
            </div>
            </div> <br>
            <div class="bg-white shadow border  p-4">
            <h3 class="text-center">Autres informations</h3>
            <div class="form-group">
              <label class="text-dark">Date de naissance :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                </div>
                <input class="border-1 shadow bg-light border-2 form-control" type="date" name="dateNaissance" id="dateNaissance" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="text-dark">École :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-building"></i></span>
                </div>
                <input class="border-1 shadow bg-light  border-2 form-control" type="text" name="ecole" id="ecole" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="text-dark">Filière :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-book"></i></span>
                </div>
                <input class="border-1 shadow  bg-light border-2 form-control" type="text" name="filiere" id="filiere" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="text-dark">Niveau d'étude :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-award"></i></span>
                </div>
                <input class="border-1 shadow bg-light border-2 form-control" type="text" name="niveauEtude" id="niveauEtude" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="text-dark">CIN :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                </div>
                <input class="border-1 shadow bg-light border-2 form-control" type="text" name="cin" id="cin" class="form-control" required>
              </div>
            </div>
           
           
           
          </div> <br>
          <!-- <div class="col-md-12"> --> <br>
            <div class="bg-white shadow border  p-4">
            <h3 class="text-center"></h3>
            <div class="form-group">
              <label class="text-dark">Mot de passe :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                </div>
                <input class="border-1 shadow bg-light  border-2 form-control" type="password" name="password" id="password" class="form-control" required>
              </div>
            <div class="form-group">
              <label class="text-dark">Confirmer le mot de passe :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                </div>
                <input class="border-1 shadow bg-light  border-2 form-control" type="password" name="password2" id="password2" class="form-control" >
              </div>
            </div>
            </div>
           
            
           
          </div>
        </div>
        <br>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Je m'inscris</button>
        </div>
      </form>
    </div>
    <div class="col-md-6">
               
</div>
  </div>
</div>

    </div>
  </div>
</div>
  
  
</div> <br> <br> <br>


    <!-- debut formulaure -->


    <script>



const text = "Veuilez vous inscrire ici";
const welcomeText = document.getElementById("welcomeText");
let index = 0;

function writeText() {
    welcomeText.innerHTML += text.charAt(index);
    index++;
    if (index < text.length) {
        setTimeout(writeText, 60);
    }
}

writeText();


var header=document.getElementById('bar');
    window.addEventListener('scroll',()=>{
        if(window.scrollY >350){
           header.style.backgroundColor="#ffc106";
           header.style.color="#ffff";
           
        }else{
            header.style.backgroundColor="#ffff";
        }
    })

 
function validatePasswords() {
  // Get the password input values
  const password1 = document.getElementById('password').value;
  const password2 = document.getElementById('password2').value;

  // Check if the passwords match
  if (password1 !== password2) {
    // Show an error message
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger';
    errorMessage.textContent = 'Les mots de passe ne correspondent pas.';
    const form = document.getElementById('registrationForm');
    form.insertBefore(errorMessage, form.firstChild);

    // Prevent form submission
    return false;
  }

  // Passwords match, allow form submission
  return true;
}
</script>



    </script>

     <!-- Footer Start -->
     <section id="map" class="pb-5 mt-10">
        <div class="container-fluid">
          <div class="row n">
            <div class="col-md-6 col-sm-6 p-0 m-0 color-div">
              <div class="contact-region-principal">
                <img class="contact-logo"  src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 17.png" alt="">
               
      
                 <p class="text-dark"> Région de l’Oriental</p>
              </div>
              <ul class="padding-ltr list-style-none">
                <li  class="contact-adress">
                  <img class="contact-img-right" src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 18.png" alt="">
                  <p class="adresse-region text-dark">Boulevard Son Altesse Royale Le Prince Héritier Moulay El Hassan - Oujda
                </p>
                </li>
                <li  class="contact-adress">
                  <img class="contact-img-right" src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 19.png" alt="">
                  <p class="adresse-region text-dark">00212536524300</p>
                </li>
                <!-- <li  class="contact-adress">
                  <img class="contact-img-right" src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 20.png" alt="">
                  <p class="adresse-region"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cfff3f2e8fdffe8dcfff3f2eff9f5f0eef9fbf5f3f2f3eef5f9f2e8fdf0b2f1fd">[email&#160;protected]</a></p>
                </li> -->
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 p-0 m-0">
              
                 <div>
                        <div>  <iframe width="100%" height="198px" title="" frameborder="0" style="border:0" src="https://maps.google.com/maps?hl=en&amp;q=conseil+regional+de+l%27oriental&amp;t=m&amp;z=17&amp;output=embed"></iframe>
                 </div>
                </div>
          
            </div>
          </div>
          
        </div>
      </section>
      <p class="text-center text-dark">© 2023 Conseil Régional de l'Oriental. Tous droits réservés.</p>
      
    <!-- Footer End -->
    



 


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
    </html>