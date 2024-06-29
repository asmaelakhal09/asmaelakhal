

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Candidature stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <style>
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
    </style>

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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <

<div class="nav">
    <div class="logo"><img src="./Logo CRO_0 (1).png" alt="Logo"></div>
    <ul id="nav-menu">
        <li ><span><a  href="#accueil">Accueil</a></span></li>
        <li class=""><span><a href="#about">A propos</a></span></li>

        <li class=""><span><a href="#services">Services</a></span></li>
        
        <li class=""><span><a href="#contacts">Contacts</a></span></li>
    </ul>
    <div class="state">
        <button><a href="offres.php">offres</a></button>
        <button><a href="connexion.php">deconnexion</a></button>
    </div>
</div>


    <!-- section -->

    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 p-4">
            <div class="alert alert-success p-3" role="alert">
              Félicitations ! Votre inscription a été effectuée avec succès.
            </div>
            <!-- <div class="text-center">
              <a href="connexion.php" class="btn btn-primary">Se connecter</a>
            </div> -->
          </div>
        </div>
      </div>
    <!-- section -->

   


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