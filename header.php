<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?> | 
      <?php echo $tagline ?>
    </title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <div class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#481380;">
        <a class="navbar-brand text-white" href="#"><?php echo $sitename ?></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="popular.php">Popular Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="now-playing.php">Now Playing Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="upcoming.php">Upcoming Movies</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Type Title Here" aria-label="Search" name="search" required>
              <select name="channel" class="custom-select" required>
                <option selected>Choose...</option>
                <option value="movie" selected="selected">Movie</option>
                <option value="tv">TV Show</option>
              </select>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div style="container">
      </br>

      