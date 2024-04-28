<?php 
    require_once('../../config.php');
    require_once BLA.'inc/header.php';
?>

    <?php
        // is_numeric It verifies that the data that comes from the database is numbers
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $row = getRow('city','city_id',$_GET['id']);
            if($row){
            $city_id = $row['city_id'];
            }else{
                header('location:'.BURLA);
            }
            // show message
            require BL.'functions/messages.php';
        }else{
            header('location:'.BURLA);
        }
    ?>

<div class="container">
        <Form action="<?php echo BURLA.'cities/updateCities.php'; ?>" method="POST" >
            <h3>Add New City</h3>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name Of City</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['city_name']  ?>"  name="nameCity" id="exampleInputPassword1">
                <input type="hidden" class="form-control" value="<?php echo $city_id;?>"  name="city_id" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </Form>
   </div>

<?php require_once BLA.'inc/footer.php';?>