<?php
  include 'config/database.php';
   
    if(isset($_REQUEST['del'])){
        
    
      $del_id= $_REQUEST['del'];
    $query= " DELETE FROM contact_us WHERE id= '$del_id'";
   
    if(mysql_query($query)){
     
        header("Location:admin_dashboard.php");
    }
    }
    ?>
    
    