<?php 
    include '_dbconnect.php';
    if(isset($_GET['song'])){
        $song = $_GET['song'];
        $sql = "DELETE FROM `song` WHERE `song`.`song_id` = $song";
        $result = mysqli_query($conn,$sql);
        header("Location: /Music Library/");
    }
?>