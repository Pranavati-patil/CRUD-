<?php
    include "config.php";

    if (isset($_POST['update'])){
         $first_name =$_POST['firstname'];
         $user_id =$_POST['id'];
         $last_name =$_POST['lastname'];
         $email =$_POST['email'];
         $password =$_POST['password'];
         $gender =$_POST['gender'];

         $sql= "UPDATE 'users'  SET 'firstname'='$firstnamr','lastname'=$lastname' 'email'='$email','password'='$password','gender'='$gender' WHERE 'id='$user_id'";

    
         $result = $conn->query($sql);

         if ($result == TRUE) {
              echo " REcord Created Sucessfully" ;
    }
    else {
              echo "Error:" . $sql . "<br>" .$conn->error ;
        }
    }   
    
    if(isset($_GET['id'])){
        $user_id =$_GET['id'];

        $sql ="SELECT *FROM 'users; WHERE 'id'=$user_id";

        $result = $conn->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){
                $gender =$_row['gender'];
                $first_name =$_row['firstname'];
                $last_name =$_row['lastname'];
                $email =$_row['email'];
                $password =$_row['password'];
                $id =$_row['id'];
           }
    
       ?>
        
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Update form </h2>
        <form action="" method="POST">
            <fieldset>
            <legend> Personal Information:</legend>
            First Name : <br>
            <input type="text" name="firstname" value="<?php echo $first_name;?>">
            <input type="hidden" name="user_id" value="<?php echo $id;?>">

            <br>
            Last Name : <br>
            <input type="text" name="lastname"value="<?php echo $last_name;?>">
            <br>
            Email : <br>
            <input type="text" name="Email"value="<?php echo $Email;?>">
            <br>

            Password : <br>
            <input type="password" name="password"value="<?php echo $password;?>">
            <br>
            Gender : <br>
            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){echo "checked";}  ?> >Male
            <input type="radio" name="gender" value="FeMale" <?php if($gender == 'Male'){echo "checked";}  ?>>FeMale
            <br><br>
            <input type="submit" name="update" value="update">
            </fieldset>
        </form>
    </body>
    </html>

    <?php
        }
    else{
        header('Location:view.php');
    }
    }
 ?>