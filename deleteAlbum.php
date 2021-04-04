<?php 
    include '_dbconnect.php';
    if(isset($_GET['album'])){
        $album = $_GET['album'];
        $sql = "DELETE FROM `album` WHERE `album`.`album_id` = $album";
        $result = mysqli_query($conn,$sql);
        header("Location: /Music Library/");
    }
?>