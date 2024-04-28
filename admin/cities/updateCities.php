<?php 
    require_once('../../config.php');
    require_once BLA.'inc/header.php';
    require_once BL.'functions/valid.php';
?>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $city_id = $_POST['city_id'];
            if(checkEmpty($name) && checkLies($name,3)){
                
                $row = getRow('city','city_id',$city_id);
                if($row){
                    // update data then go to db
                    $sql = "UPDATE city SET city_name = '$name' WHERE city_id = '$city_id' ";
                    $success_message = db_update($sql);
                    // refresh page after 2 seconds
                     header('refresh:2;url='.BURLA.'cities/viewAllCities.php');
                    echo "Success! Redirecting...";
                }else{
                    $error_message = "please type correct data";
                }
                
            }else{
                 $error_message = "please fill all filed";
            }
            // show message
            require BL.'functions/messages.php';
        }
    ?>





<?php require_once BLA.'inc/footer.php';?>