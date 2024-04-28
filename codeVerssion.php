<?php
    // db.php
    $conn = mysqli_connect('localhost','root','','medical_serv');
    if(!$conn){
        dir('Error' . mysqli_connect_error());
    }

    function db_insert($sql){
        global $conn;
        $result = mysqli_query($conn,$sql);
        if($result){
            return 'added success';
        }else{
            return false;
        }
    }
    
    // get row from database videos 5
    function getRow($table,$field,$value){
        global $conn;
        $sql = "SELECT * FROM '$table' WHERE '$field' = '$value'";
        // $sql = "select * from '$table' where '$field' = '$value'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $rows = [];
            // It queries the row in the database
            if(mysqli_num_rows($result) > 0){
                $rows[] = mysqli_fetch_assoc($result);
                return $rows[0];
            }
        }else{
            return false;
        }
    }
?>
