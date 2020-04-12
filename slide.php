<!DOCTYPE html>
<html>
    <title>Products at a Glance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        .mySlides {display:none;}
        .h31{
            text-align: start;
            margin:70px;
        }
    </style>
    <body>
        <?php include 'masterpage/header.php'; ?>
        <div class="container">
            <div class="jumbotron">
                <h3><b>Corporate Services</b> provides a bridge between retail and Whole sale marketings. It deals majority of its business's in electronics products
                    which best suited in telecom sector's. We <b>Corporate Services,</b> Sell in bulk quantity's at marginal cost.Our major product are GSM Fixed Cellular Terminal,
                    FWP, Batteries, Commercial Power Adopter,Mobile Phone Adopter, GSM Gateway, DVR Camera,CDMA Phone, Landline Phone</h3>
            </div>
            <h3 class="w3-center"><b>Product Slideshow</b></h3>

            <div class="w3-content w3-section" style="max-width:500px">
                <img class="mySlides" src="Slideshow_Image/FCT_1.JPG" style="width:100%">
                <img class="mySlides" src="Slideshow_Image/FWP.jpg" style="width:100%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:100%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:100%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:100%">
                <img class="mySlides" src="Slideshow_Image/Adopter.jpg" style="width:100%">
            </div>
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