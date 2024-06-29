<?php


  include_once "Actions/connexionCandidatAction.php";
 


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

        .hero-header
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            height: 260px;
        }
        .demarche 
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            background-attachment:fixed;
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
    <?php 

$page="connexion"


?>


<?php include 'navbar.php'; ?>

      
                <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
        </div>
    </div>
  
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container p-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <h3 id="welcomeText" class="display-4 mb-3 animated slideInDown b text-center text-light"></h3>
                    <p class="text-light s">Une fois que vous avez creer votre compte vous pouvez acceder à votre compte en renseignant votre email et votre mot de passe</p>
    </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- debut formulaure -->
 <br> <br>
    <div class="container f">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center text-dark">Connectez-vous !</h2>
      <form class="border p-3 bg-light shadow" action="" method="POST">
        <div class="text-center text-danger">
          <?php
            if(isset($echec)){
              echo "<p class=''>".$echec."</p>";
            } elseif(isset($vide)){
              echo "<p class=''>".$vide."</p>";
            } 
          ?>
        </div>
        <div class="form-group">
              <label for="email">Email :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                </div>
                <input class="border-1 shadow bg-light border form-control" type="email" name="email" id="email" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="password">Mot de passe :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                </div>
                <input class="border-1 shadow bg-light border form-control" type="password" name="password" id="password" class="form-control">
              </div>
            </div> <br>
            <div class="text-center">
          <button type="submit" class="btn btn-warning">Se connecter</button>
        </div> <br>
        <a style="color:blue;" href="reinitiaiser.php">Mot de passe oublié?</a>
      </form>
    </div>
  </div>
</div>


<script>



const text = "Espace stagiaire";
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
    </script>
    <!-- debut formulaure -->

    <!-- Footer Start -->
    
      
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