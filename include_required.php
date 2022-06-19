<?php

    //include "database.php";

    require "database.php";

    $sql = "SELECT * FROM `trip`";
    $result = mysqli_query($conn,$sql);

    while($data = mysqli_fetch_assoc($result)){
        echo $data['s.no'] . " . " . "Your Good name is " . $data['name'] . "and your destination is " . $data['destination']; 
        echo "<br>";
    }
    

?>