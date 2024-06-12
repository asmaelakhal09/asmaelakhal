<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <title>Candidature stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        * {
            padding:0;
            margin:0;
            color:black
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
    height100%;
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

.context {
    width: 70%;
    height: 700px;
    display: flex;
    justify-content: center;
    align-items: center;
    background:black;
    margin:auto;
    position: relative;
    top:30px;
    border-radius:10px

}


.context .icon .fa-solid {
    font-size:399px;
    color:white
}

.context .icon {
    display:flex;
    justify-content:flex-end;
    align-items :center;
    flex-grow:0.3;
}
.context .form {
    display:flex;
    flex-direction:column;
    justofy-content:space-around;
    aign-items:center;
    height:70%;
    flex-grow:0.2;
    position:relative

}
.context .form p {
    color:white;
    margin-top:15px
}
.context .form input {
    height:50px;
    border-radius:8px;
    padding:10px 15px ;

}
.context .form .fa-message {
    position: absolute;
    left:410px;
    top:362px;
    font-size:30px
}
.context .form .fa-user {
    position: absolute;
    left:410px;
    top:169px;
    font-size:30px
}
.context .form i:nth-child(3) {
    position: absolute;
    left:410px;
    top:68px;
    font-size:30px
}
.context .form textarea {
    height: 130px;
    padding:10px 15px ;
}
.context .form button  {
    width:150px;
    background: white;
    border: 0px;
    padding:10px;
    color:block;
    margin-top:15px
    
}

    </style>

</head>
<body>
        <!--navbar-->

        <h3 class="title">Contact</h3>

<div class="context">
<div class="form">
    <p>Email</p><input type="text" placeholder="Enter Your Email"><i class="fa-solid fa-envelope"></i>
    <p>Name</p><input type="text"  placeholder="Enter Your Name"><i class="fa-solid fa-user"></i>
    <p>Message</p><textarea  id="" placeholder="Enter Your Message"></textarea><i class="fa-solid fa-message"></i>
    <button>Submit</button>
</div>
<div class="icon">
<i class="fa-solid fa-address-book"></i>
</div>
</div>

</body>
</html>