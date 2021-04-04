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
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $songname = $_POST['name'];
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $year = $_POST['year'];
        $duration = $_POST['duration'];

        $sql = "INSERT INTO `song` (`song_id`, `song_name`, `artist`, `album`, `year_of_release`, `duration`, `timestamp`) 
        VALUES (NULL, '$songname', '$artist', '$album', '$year', '$duration', current_timestamp());";
        $result = mysqli_query($conn,$sql);
        header("Location: /Music Library");
    }
?>

<body>
    <?php  include '_header.php'; ?>
    <div class="container py-2 my-2">
        <!-- <h2 class="text-center">Welcome to Musify - <small style="color: grey;">Your own musical world</small></h2> -->
        <h2 class="text-center">Add a song</h2>

        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST">
            <div class="form-group my-4">
                <label for="formGroupExampleInput">Name of Song</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name" required>
            </div>
            <div class="col-auto my-1 form-group my-4">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Artist</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="artist" required>
                    <option value="">Choose ...</option>
                    <?php 
                    $sql = "SELECT * from `artist`";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $artistid = $row['artist_id'];
                        $artistname = $row['artist_name'];
                        echo '<option value="'.$artistid.'">'.$artistname.'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="col-auto my-1 form-group my-4">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Album</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="album" required>
                    <option value="">Choose ...</option>
                    <?php 
                    $sql = "SELECT * from `album`";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $albumid = $row['album_id'];
                        $albumname = $row['album_name'];
                        echo '<option value="'.$albumid.'">'.$albumname.'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group my-4">
                <label for="formGroupExampleInput2">Year of release</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Year of release" name="year" required>
            </div>
            <div class="form-group my-4">
                <label for="formGroupExampleInput2">Duration</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Duration in seconds" name="duration" required>
            </div>
            <div class="form-group my-4">
                <button type="submit" class="btn btn-warning">Add</button>
            </div>

        </form>

        <!-- <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Artist</label>
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