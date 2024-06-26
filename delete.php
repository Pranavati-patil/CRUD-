<?php
    include "config.php";

    if(isset($_GET['id'])){
    $user_id =$_GET['id'];

    $sql="DELETE From 'users' WHERE 'id'='$user_id'";

    }$result = $conn->query($sql);

    if ($result == TRUE) {
        echo "New REcord Created Sucessfully" ;
    }else {
        echo "Error:" . $sql . "<br>" .$conn->error ;
    }

?>

