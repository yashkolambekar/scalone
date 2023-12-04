<?php

    include "db/db.php";

    $query = "SELECT * FROM entries ORDER BY date DESC LIMIT 30";
    $result = mysqli_query($db, $query);
    $rows = [];
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            array_push($rows, $row);
        }
        
        echo json_encode($rows);
    }

?>