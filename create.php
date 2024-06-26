<?php
    include "config.php";

    if (isset($_POST['submit'])){
    $first_name =$_POST['firstname'];
    $last_name =$_POST['lastname'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $gender =$_POST['gender'];

    }

    $sql = "INSERT INTO 'Users' ('firstname','lastname','email','password','gender') VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
    echo "New REcord Created Sucessfully" ;
    }
    else {
        echo "Error:" . $sql . "<br>" .$conn->error ;
    }

    $conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2> Signup Form </h2>
    <form action="" method="POST">
        <fieldset>
            <legend> Personal Information:</legend>
            First Name : <br>
            <input type="text" name="firstname" >
            <br>
            Last Name : <br>
            <input type="text" name="lastname">
            <br>
            Password : <br>
            <input type="password" name="password">
            <br>
            Gender : <br>

            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
</body>

</html>