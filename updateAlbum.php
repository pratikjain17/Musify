<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Musify -World for music lovers</title>
</head>

<?php  include '_dbconnect.php'; ?>

<?php 
    $album = $_GET['album'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $albumname = $_POST['name'];

        $sql = "UPDATE `album` SET `album_name` = '$albumname' Where `album_id` = $album;";
        $result = mysqli_query($conn,$sql);
        header("Location: /Music Library");
    }
?>

<body>
    <?php  include '_header.php'; ?>
    <div class="container py-2 my-2">
        <!-- <h2 class="text-center">Welcome to Musify - <small style="color: grey;">Your own musical world</small></h2> -->
        <h2 class="text-center">Update album - <small> <?php
            $albumid = $_GET['album'] ;
            $sql = "SELECT * from `album` where `album_id` = $albumid";
            $res = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($res);
            echo $row['album_name'];
        ?></small></h2>

        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST">
            <div class="form-group my-4">
                <label for="formGroupExampleInput">Name of album</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name">
            </div>
            <div class="form-group my-4">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>

        </form>

        <!-- <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">album</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> -->
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>