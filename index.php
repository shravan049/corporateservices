<!DOCTYPE html>
<html>
    <head>
        <title style="background-color:lightblue;font-family: sans-serif">Products at a Glance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link href="stylesheet/headerStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/boot.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style_common.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
        <script src="assets/js/modernizr.custom.69142.js"></script>
        <script src="assets/js/jquery-1.10.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js" ></script>


        <style>
            .mySlides {display:none;
                       width:80%;
            }
            .h31{
                text-align: start;
                margin:70px;
            }
        </style>
    </head>
    <body>
        <?php include 'masterpage/header.php'; ?>
        <div class="container">
            <div class="jumbotron" style="background-color:lightblue;font-family: sans-serif;">
                <h4><b>Corporate Services</b> provides a bridge between retail and Whole sale marketings. It deals majority of its business's in electronics products
                    which best suited in telecom sector's. We <b>Corporate Services,</b> Sell in bulk quantity's at marginal cost.Our major product are GSM Fixed Cellular Terminal,
                    FWP, Batteries, Commercial Power Adopter,Mobile Phone Adopter, GSM Gateway, DVR Camera,CDMA Phone, Landline Phone</h4>
            </div><br><br>
            <h3 class="w3-center"><b>Products at glance</b></h3><br><br>

            <div class="w3-content w3-section" style="width:500px;">
                <img class="mySlides" src="Slideshow_Image/FCT_1.JPG" >
                <img class="mySlides" src="Slideshow_Image/FWP.jpg" style="width:80%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:80%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:80%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:80%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:80%">
            </div>
        </div>





        <div>
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading" style="color:#3680C1">Services</h2>
                            <h3 class="section-subheading text-muted">We serve for better and ensure the transparency for the Clients/Dealers.</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                            <h4 class="service-heading">E-Commerce</h4>
                            <p class="text-muted">Our aim is to provide the availablity of the products for the dealers so that they can make the business in flexible way.</p>
                        </div>
                        <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-automobile fa-stack-1x fa-inverse"></i></span>
                            <h4 class="service-heading">Telecom Devices</h4>
                            <p class="text-muted">We sell all telecom item like GSM Fixed Cellular Terminal, Fixed wireless phone, GSM Gateway, DVR camera,Power Supply,Power Adopter, Battery in all capacity.</p>
                        </div>
                        <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-windows fa-stack-1x fa-inverse"></i></span>
                            <h4 class="service-heading"> Communications</h4>
                            <p class="text-muted">We Corporate Services believe in communication at great level so feel free to contacts us at the given number or mail directly to get the response.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'masterpage/footer.php'; ?>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>

    </body>
</html>