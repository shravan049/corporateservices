<?php
// Database connection 
include 'config/database.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('corporate_db');
//submit button connection

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $error = '';
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    if ($name == '') {
        $error .= 'Please enter name <br />';
    }
    if ($mobile == '') {
        $error .= 'Please enter Mobile <br />';
    }
    if ($email == '') {
        $error .= 'Please enter Email <br />';
    }
    if ($feedback == '') {
        $error .= 'Please enter Feedback <br />';
    }
    if ($error == '') {
        $query = "INSERT INTO contact_us(name, mobile, email, feedback) VALUES ('" . $name . "', '" . $mobile . "', "
                . " '" . $email . "', '" . $feedback . "') ";

        mysql_query($query);

        header('location:welcome.php');
    } else {
        //  $error .= 'Failed <br />';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us: Corporate Services </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="stylesheet/headerStyle.css" rel="stylesheet" type="text/css"/>
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
        <title>Contact Us | CorporateServicesIndia.</title>
        <script>
            function validateContactUs() {
                var name = document.contactus.name.value;

                var mob = document.contactus.mobile.value;
                var email = document.contactus.email.value;
                var feedback = document.contactus.feedback.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                } else if (mob == null || mob == "") {
                    alert("Mobile  can't be blank.");
                    return false;
                }
                if (email == null || email == "") {
                    alert("Email can't be blank");
                    return false;
                } else if (feedback == null || feedback == "") {
                    alert("Feedback  can't be blank.");
                    return false;
                } else {
                    return true;
                }
            }

        </script>
    </head>
    <body> 

        <div> <?php include 'masterpage/header.php'; ?> </div>
        <div class="container">    

            <form name="contactus" method="POST" action="" onsubmit="return validateContactUs()">

                <?php
                if (!empty($error) && $error != '') {
                    ?>
                    <div style="color: red"><?php echo $error; ?></div>
                    <?php
                }
                ?>

                <div class="jumbotron" style="background-color:lightblue;font-family: sans-serif">
                    <h2>Fill the below form to get respond</h2> 
                    <p>The simplest way to get answers to your questions or reach someone at <b>Corporate Services</b> is to send a request using the form below. We will direct your message where it needs to go and someone will get back to you promptly.</p>
                </div>


                <h2 style="text-align: center; color:black;margin-top:40px;">Please submit your enquiry regarding product and orders</h2>
                <div>
                    <table border="0" cellpadding="5" cellspacing="10"  style="margin:60px">
                        <tr>
                            <td><b>Name*:</b></td>
                            <td><input  type="text" name="name" maxlength="60" style="width:250px;" /></td>
                        </tr>
                        <tr>
                            <td><b>Phone number*:</b></td>
                            <td><input  type="tel" name="mobile" maxlength="10" style="width:250px;" /></td>
                        </tr><tr>
                            <td><b>Email address*:</b></td>
                            <td><input type="email" name="email"  maxlength="60" style="width:250px;" /></td>
                        </tr><tr>
                            <td><b>Write Your Queries:</b></td>
                            <td><textarea name="feedback" rows="7" cols="40" style="width:250px;"></textarea></td>
                        </tr><tr>
                            <td colspan="2" align="center"> <br />
                                <table border="0" cellpadding="5" cellspacing="10">
                                    <tr><td colspan="2" style="padding-bottom:18px;">
                                            <!-- Please check our ProCaptcha service which is ad-free: -->

                                            <h5 style="color: red">* - required fields.</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <input  type="submit" name="submit" value="Submit" />
                                        </td></tr>
                                </table><br />

                    </table>
                </div>


            </form>
        </div>
        <div> <?php include 'masterpage/footer.php'; ?> </div>




    </body>
</html>