<?php
    require_once('../config.php');
    require_once BL.'functions/valid.php';
    require_once BL.'functions/messages.php';


    if(isset($_SESSION['admin_name'])){
        header('location:'.BURLA.'index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <?php
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            if(checkEmpty($email) && checkEmpty($pass)){
                if(validEmail($email)){
                    // Go to the database and make sure that this data exists  
                    $check = getRow('admin','admin_email',$email);
                    // It's a comparison between the entered data and what is found in the data base
                    // var_dump($check);

                    // the same word above
                    $check_password = password_verify($pass , $check['admin_password']);
                    if($check_password){
                        $_SESSION['admin_name'] = $check['admin_name'];
                        $_SESSION['admin_email'] = $check['admin_email'];
                        $_SESSION['admin_id'] = $check['admin_id'];

                        header('location:'.BURLA.'index.php');
                    }else{
                        echo $error_message = "error";
                    }
                }else{
                    $error_message = "please type correct email";
                }
            }else{
                $error_message = "please fill all filds";
            }
        }

    ?>

  <div class="login-container">
    <h2>Login</h2>
    <!-- on the same page -->
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <!-- messages -->
    <?php require BL.'functions/messages.php';?>  
    
    <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
      </div>
      <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>
</html>


