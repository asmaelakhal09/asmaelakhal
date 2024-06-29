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
        .contact {
            width: 80%;
            display:flex;
            flex-direction:column;
            justify-content:space-around;
            margin:auto;
            margin-bottom:30px
        }
        .inputs {
            display:flex;
            flex-direction:column;
            justify-content:space-around;
            height:500px
        }
        .field {
            width:380px;
            position:relative;
            margin-left:250px
        }
        .field input {
            padding:10px;
            width:450px;
            border:1px solid ; 

        }
        .field  i {
            font-size:25px;
            margin-left:15px;
            position:absolute;
            right:-14%;
            top: 59%;

        }
        .field textarea {
            width:450px;
            height:100px;
            position: relative;
            margin-bottom:20px;
            border:1px solid ; 

        }
        .message i {
            position: absolute;
            top: 50px;
        }
        .inputs .field:nth-child(4) input {
            background-color:#e1e1e1;
            border:0px;
        }
        .inputs .field:nth-child(4) input:hover {
            background-color:beige;

        }
    </style>

</head>
<body>
        <!--navbar-->

        <div class="contact">
            <div class="contact-title">
                <h2 class="">Contact Us</h2>
            </div>
            <div class="inputs">
                <div class="field"><p>Email</p><input type="text" placeholder="Enter Your Email"> <i class="fa-regular fa-envelope"></i></div>
                <div class="field"><p>Phone Number</p><input type="text" placeholder="Enter Your Phone Number"><i class="fa-solid fa-phone"></i></div>

                <div class="field message"><p>Message</p><textarea placeholder="Enter Your Mesage"></textarea></div>
                <div class="field"><input type="submit" value="Submit"> </div>

            </div>
           
        </div>


</body>
</html>