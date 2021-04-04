<?php 
    include '_dbconnect.php';
    if(isset($_GET['artist'])){
        $artist = $_GET['artist'];
        $sql = "DELETE FROM `artist` WHERE `artist`.`artist_id` = $artist";
        $result = mysqli_query($conn,$sql);
        header("Location: /Music Library/");
    }
?>