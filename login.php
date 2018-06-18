<?php   require_once("sesion.class.php"); include "0.php";?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Thunder Landscape Lighting</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Core Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
   
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/styleb.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File -->
    <link rel="stylesheet" href="css/font-awesomeb.css" type="text/css" media="all">
</head>

<body>
    <h1 class="title-agile text-center">Thunder Landscape Lighting</h1>
    <div class="content-w3ls">
        <div class="agileits-grid">
            <div class="content-top-agile">
                <h2  ><img  src="images/34395325_1756761394401141_7159601746744967168_n.jpg"></h2>
            </div>
            <div class="content-bottom">
                <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                    <div class="field_w3ls">
                        <div class="field-group">
    <input type="text" id="usu" name="usuario" maxlength="9" placeholder="usuario" required />
                        </div>
                        <div class="field-group">
                        <input id="password-field" type="password" class="form-control"  name="contrasenia" placeholder="contraseña" required />
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="wthree-field">
                       <input  type="submit" id="boton" name ="iniciar" value="Iniciar Sesion"/>
                    </div><ul class="list-login">
                       
                        <li>
                            <a href="index.html" class="text-right">Regresar</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                
                </form>
            </div>
            <!-- //content bottom -->
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 Copyright. All rights reserved | Design by Thunder Landscape Lighting
        </p>
    </div>
    <!--//copyright-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- script for show password -->
    <script>
        $(".toggle-password").click(function () {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <!-- /script for show password -->

</body>
<!-- //Body -->

</html>