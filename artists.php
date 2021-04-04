<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Musify -World for music lovers</title>
</head>

<?php include '_dbconnect.php'; ?>

<body>
    <?php include '_header.php'; ?>
    <div class="container py-2 my-2">
        <!-- <h2 class="text-center">Welcome to Musify - <small style="color: grey;">Your own musical world</small></h2> -->
        <div class="container py-2 my-2">
            <h3 class="text-center">Your Artists</h3>
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Songs</a></li>
                    <li class="breadcrumb-item"><a href="albums.php">Album</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artists</li>
                </ol>
            </nav>
            <a href="addArtist.php" class="btn btn-info py-2 my-2" style="float: right;"><i class="fas fa-plus"></i></a>
            <table class="table table-striped table-dark py-4 my-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `artist`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $artist_id = $row['artist_id'];
                        $artist_name = $row['artist_name'];

                        echo '<tr>
                            <th scope="row">' . $artist_id . '</th>
                            <td>' . $artist_name . '</td>
                            <td><a href="updateArtist.php?artist=' . $artist_id . '" class="btn btn-warning"> <i class="fas fa-sync"></i></a>
                            <a href="deleteArtist.php?artist=' . $artist_id . '" class="btn btn-success"> <i class="fas fa-trash-alt"></i></a></td>
                        </tr>';
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>