<?php 
    require_once('../../config.php');
    require_once BLA.'inc/header.php';
    require_once BL.'functions/valid.php';
?>

<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white">view all cities</h3>
    <table class="table table-dark table-bordered">
        <thead>
            <tr class="test-center">
                <td scope="col">id</td>
                <td scope="col">Name</td>
                <td scope="col">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $data = getRows('city'); $x = 1;?>
            <?php foreach($data as $row){ ?>
        
                <tr class="test-center">
                    <td scope="row">
                        <?php echo $x; ?>
                    </td>
                    <td class="text-center"><?php echo $row['city_name']?></td>
                    <td class="text-center">
                        <a href="<?php echo BURLA.'cities/editCities.php?id='.$row['city_id']?>" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger delete" data-field="city_id" data_id="<?php echo $row['city_id'];?>" data-table="city">Delete</a>
                    </td>
                </tr>

            <?php echo $x++; } ?>
        </tbody> 

    </table>
</div>
<?php require_once BLA.'inc/footer.php';?>