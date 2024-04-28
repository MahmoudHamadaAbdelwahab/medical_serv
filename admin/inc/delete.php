<?php
    // connect to database
    require_once(BL.'../../functions/db.php');
    $table = $_GET['table'];
    $field = $_GET['field'];
    $item_id = $_GET['table'];

    $sql = "DELETE FROM '$table' WHERE '$field' = '$item_id'";

    $result = deleteRow($sql);
    if(!$result){
        $data['message'] = "not success";
    }

    echo json_encode($data);
?>