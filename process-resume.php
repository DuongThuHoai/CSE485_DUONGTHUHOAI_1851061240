<?php

    include('config.php')


$sql = "SELECT * from resume where name ='$name'";
$result = mysqli_query($sconn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $percent = $topic['percent'];
        $name = $topic['name'];
    }
}


?>