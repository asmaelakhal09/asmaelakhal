<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
.active {
    background:gray;
}
</style>
<body>
    



<div class="nav">
    <div class="logo"><img src="./Logo CRO_0 (1).png" alt=""></div>
        <ul id="nav-menu">
            <li class="<?php if ($page == "index") echo 'active' ?>"><span><a href="index.php">Accueil</a></span></li>
            <li class="<?php if ($page == "propos") echo 'active' ?>"><span><a href="about.php">A propos</a></span></li>
         
            <li class="<?php if ($page == "contact") echo 'active' ?>"><span><a href="contacts.php">Contacts</a></span></li>
        </ul>

        <div class="state">
            <button><a href="offres.php">Offres</a></button>
            <button><a href="inscription.php">s'inscrire</a></button>
            
            <button><a data-toggle="dropdown" class="dropdown-toggle" data-bs-offset="10,20" data-bs-auto-close="true" aria-expanded="false" href="connexion.php">se connecter</a><span class="caret"></span></button>
            
                <li><a href="#">Candidat</a></li>
                <li><a href="#">Admin</a></li>
                
            
            
        </div>
    </div>
</div>
</body>
</html>