<?php 
    require_once('../../config.php');
    require_once BLA.'inc/header.php';
    require_once BL.'functions/valid.php';
?>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['nameCity'];
            if(checkEmpty($name) && checkLies($name,3)){
                $sql = "INSERT INTO city (city_name) VALUES ('$name')";
                 $success_message = db_insert($sql);
            }else{
                 $error_message = "please fill all filed";
            }
            // show message
            require BL.'functions/messages.php';
        }
    ?>

<div class="container">
        <Form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
            <h3>Add New City</h3>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name Of City</label>
                <input type="text" class="form-control" name="nameCity" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </Form>
   </div>

<?php require_once BLA.'inc/footer.php';?>