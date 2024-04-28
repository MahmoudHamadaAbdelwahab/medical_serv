<?php
    $conn = mysqli_connect('localhost','root','','medical_serv');
    if(!$conn){
        dir('Error' . mysqli_connect_error());
    }
    // insert data to db
    function db_insert($sql){
        global $conn;
        $result = mysqli_query($conn,$sql);
        if($result){
            return 'added success';
        }else{
            return false;
        }
    }

        // update data to db
        function db_update($sql){
            global $conn;
            $result = mysqli_query($conn,$sql);
            if($result){
                return 'updated success';
            }else{
                return false;
            }
        }

    // delete sql from db
    function deleteRow($sql){
        global $conn;
        $result = mysqli_query($conn,$sql);
        if($result){
            return 'added success';
        }else{
            return false;
        }
    }

    //
    function getRows($table)
    {
    global $conn;
    $rows = []; // Initialize an empty array to store rows

    // Show data from the database
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch all rows and store them in the $rows array
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }

    return $rows; // Return the entire array of rows
    }

    // Function to get a row from the database based on a column value
    function getRow($table, $field, $value){
        global $conn;
        $sql = "SELECT * FROM $table WHERE $field = '$value'";
        $result = mysqli_query($conn, $sql);
        if($result){
            $rows = [];
            if ($result && mysqli_num_rows($result) > 0) {
                return mysqli_fetch_assoc($result);
                return $rows[0];
            }
        }
        return false;
    }

?>
