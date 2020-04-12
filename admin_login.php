<?php
// Database connection 
include 'config/database.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('corporate_db');
//submit button connection

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $error = '';
    $password = $_POST['password'];

    if ($email == '') {
        $error .= 'Please enter Email <br />';
    }

    if ($password == '') {
        $error .= 'Please enter Password<br />';
    }

    if ($error == '') {
        $query = 'SELECT * FROM admin_login WHERE email = "' . $email . '" AND password = "' . $password . '" ';
        $result = mysql_query($query);
        $count = mysql_num_rows($result);
        if ($count > 0) {
            $fetch = mysql_fetch_array($result);
            $_SESSION['userid'] = $fetch['id'];
            header('location:admin_dashboard.php');
        } else {
            $error .= 'Invalid email/Password';
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="stylesheet/headerStyle.css" rel="stylesheet" type="text/css"/>
        <link href="stylesheet/logincss.css" rel="stylesheet" type="text/css"/>
         <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <script>
            function validateForm() {
                var uemail = document.adminloginform.email.value;

                var upassword = document.adminloginform.password.value;
                if (uemail == null || uemail == "") {
                    alert("Email can't be blank");
                    return false;
                } else if (upassword == null || upassword == "") {
                    alert("Password  can't be blank.");
                    return false;
                } else {
                    return true;
                }
            }

        </script>


    </head>
    <body> 

        <?php include 'masterpage/header.php'; ?> 

      
            <form name="adminloginform" method="POST" action="" onsubmit="return validateForm()">
                <div class="container" style="background-color: #00ccff"> 
                <div style="text-align: center;height:  available;font-family: sans-serif;">
                    <?php
                    if (!empty($error) && $error != '') {
                        ?>
                        <div style="color: red"><?php echo $error; ?></div>
                        <?php
                    }
                    ?>
                        <h2 style="background-color:lightblue;text-align: center;margin: 50px;">Admin Login Center</h2>
                     <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email">

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password">

                    <button type="submit" name="submit" value="submit">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn"><a href="admin_login.php">Cancel</a></button>
                        <span class="psw"> <a href="change_password.php"> Forgot Password?</a></span>
                </div>
                   


                </div>
             </div>    
                
            </form>
       
        <div><?php include 'masterpage/footer.php'; ?> </div>




    </body>
</html>