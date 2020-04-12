<?php
// Database connection 
include 'config/database.php';
//session_start();
if (empty($_SESSION['userid'])){
    header('location:admin_login.php');
    exit();
} 
//mysql_connect('localhost', 'root', '');
//mysql_select_db('corporate_db');

$query = 'SELECT * FROM contact_us';
$result = mysql_query($query);
$user = array();
while ($row = mysql_fetch_object($result)) {
    $user[] = $row;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Data Center: Corporate Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

        </style>
    </head>
    <body> 

       
        <?php include 'masterpage/header.php'; ?>
        
        <div class="container">
            <div>

                <a href="logout.php"><input type="button" name="logout" value="Logout" id="logout" class="btn btn-primary" style="float:right;margin: 10px;"/></a>

            </div>

            <div>
                <table>


                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Feedback</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($user as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->id ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><?php echo $value->mobile ?></td>
                            <td><?php echo $value->email ?></td>
                            <td><?php echo $value->feedback ?></td>
                            <td><a href='delete.php?del=<?php echo $value->id ?>'> <button type="button" class="btn btn-primary btn-xs">Delete </button></a></td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
        </div>

<?php include 'masterpage/footer.php'; ?>

    </body>
</html>