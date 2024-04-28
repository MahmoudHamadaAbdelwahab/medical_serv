<?php 
    require_once('../../config.php');
    require_once BLA.'inc/header.php';
    require_once BL.'functions/valid.php';
?>

<?php
require_once BL.'functions/db.php';

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(checkEmpty($user) && checkEmpty($email) && checkEmpty($password)){
            if(validEmail($email)){
                // hashing to password 
                $hashed_password = password_hash($password , PASSWORD_DEFAULT);
                $sql = "insert into admin(admin_name ,admin_email,admin_password) VALUES ('$user' , '$email' , '$hashed_password')";
                $params = ['s', $name]; // 's' indicates a string parameter
                echo $success_message = db_insert($sql , $params);
            }else{
               echo $error_message = "please type correct email";
            }
        }else{
            echo $error_message = "please fill all filed";
        }
        // include message.php 
        require_once BL.'functions/messages.php';

    }
?>

<div class="register-container">
    <h2 class="text">Register page</h2>
    <form action="" method="POST">
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" >
    </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" >
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" >
      </div>
      <input type="submit" id="submit" name="submit" value="Register">
    </form>
  </div>

<?php require_once BLA.'inc/footer.php';?>