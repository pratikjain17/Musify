<?php 
    echo '<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    <a href="index.php" class="navbar-brand">Welcome to Musify - <small style="color: grey;">Your own musical world</small></a>
    <form class="d-flex py-2" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Your Songs Here" aria-label="Search" name="query">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </nav>';
?>


