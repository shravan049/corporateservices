<?php
include 'config/database.php';
if (isset($_POST['submit'])){
    $old_pass = md5($_POST['old_pass']);
    $new_pass = md5($_POST['new_pass']);
    $re_pass = md5($_POST['re_pass']);
    $chg_pwd = mysql_query("select * from admin_login where email='$user'");
    $chg_pwd1 = mysql_fetch_array($chg_pwd);
    $data_pwd = $chg_pwd1['password'];
    if ($data_pwd == $old_pass) {
        if ($new_pass == $re_pass) {
            $update_pwd = mysql_query("update admin_login set password='$new_pass' where email='$user'");
            echo "<script>alert('Update Sucessfully'); window.location='admin_login.php'</script>";
        } else {
            echo "<script>alert('Your new and Retype Password is not match'); window.location='change_password.php'</script>";
        }
    } 
    else {
        echo "<script>alert('Your old password is wrong'); window.location='change_password.php'</script>";
    }
}
?>
<!--Full Source Code-->
<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <style type="text/css">
            fieldset {
                width:500px;
                border:5px dashed #CCCCCC;
                margin:0 auto;
                border-radius:5px;
            }

            legend {
                color: blue;
                font-size: 25px;
                font-family: sans-serif;
            }

            dl {
                float: right;
                width: 390px;
            }

            dt {
                width: 180px;
                color: brown;
                font-size: 19px;
            }

            dd {
                width:200px;
                float:left;
            }

            dd input {
                width: 200px;
                border: 2px dashed #DDD;
                font-size: 15px;
                text-indent: 5px;
                height: 28px;
            }

            .btn {
                color: #fff;
                background-color: dimgrey;
                height: 38px;
                border: 2px solid #CCC;
                border-radius: 10px;
                float: right;
            }

        </style>
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
    </head>

    <body>
<?php include 'masterpage/header.php'; ?>
        <div style="margin:50px;">
            <fieldset>
                <legend>Change Password</legend>


                <form method="post">
                    <dl>
                        <dt>
                        Old Password
                        </dt>
                        <dd>
                            <input type="password" name="old_pass" placeholder="Old Password..." value="" required />
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                        New Password
                        </dt>
                        <dd>
                            <input type="password" name="new_pass" placeholder="New Password..." value=""  required />
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                        Retype New Password
                        </dt>
                        <dd>
                            <input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
                        </dd>
                    </dl>

                    <p align="center">
                        <input type="submit" class="btn" value="Reset Password" name="submit" />
                    </p>
                </form>
            </fieldset>
        </div>

<?php include 'masterpage/footer.php'; ?>
    </body>
</html>
