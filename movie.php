<?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
  
?>

<?php 
  if(isset($_GET['id'])){
      $id_movie = $_GET['id']; 
?>
    <h1 class="text-center"><?php echo $movie_id->original_title?></h1>
    <h5 class="text-center"><?php echo $movie_id->tagline?> </h5>
  </br>

  <hr>

    <div class="container">
      <div class="row justify-content-md-center">
    <?php foreach($movie_video_id->results as $video){
        echo 
        '<div class="card-group">
          <div class="card">
            <iframe width="500" height="300" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>
          </div>
         </div>';
    }?>
      </div>
    </div>

    <hr>
    <div class="row justify-content-md-center">
    <div class="card" style="width: 600px;">
      <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Title : <?php echo $movie_id->original_title ?></p>
        <p class="card-text">Tagline : <?php echo $movie_id->tagline ?></p>
        <p class="card-text">Genres :  <?php foreach($movie_id->genres as $g){echo '<span>' . $g->name . '</span> ';}?></p>
        <p class="card-text">Overview : <?php echo $movie_id->overview ?></p>
        <p class="card-text">Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?></p>
        <p class="card-text">Production Companies : <?php foreach($movie_id->production_companies as $pc){echo $pc->name." ";}?></p>
        <p class="card-text">Production Countries: <?php foreach($movie_id->production_countries as $pco){echo $pco->name. "&nbsp;&nbsp;" ;}?></p>
        <p class="card-text">Budget: $ <?php echo $movie_id->budget ?></p>
        <p class="card-text">Vote Average : <?php echo $movie_id->vote_average ?></p>
        <p class="card-text">Vote Count : <?php echo $movie_id->vote_count ?></p>
      </div>
    </div>
    </div>
    <hr>
 
    <?php 
    } else{
      echo "<h5>Movie tidak ditemukan.</h5>";
    }
    ?>

<?php
  include_once "footer.php";
?>