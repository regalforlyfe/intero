<?php
  include "conf/info.php";
  $title="Upcoming Movies";
  include_once "header.php";
?>
    <div class="card">
        <div class="card-header">
          <h3 class="text-center">- Upcoming Movies -</h3>
          <h5 class="text-center">
            <?php
            include_once "api/api_upcoming.php";
            $min = date('d F Y', strtotime($upcoming->dates->minimum));
            $max = date('d F Y', strtotime($upcoming->dates->maximum));
            echo "<sub>coming soon from </sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span>";
          ?>
    </h5>
        </div>
        <div class="card-body">
          <div class="container">
          <div class="row justify-content-md-center">
      <?php
        foreach($upcoming->results as $p){
          echo '<div class="card-group">
          <div class="card text-center" style="width: 500px;">
          <a href="movie.php?id=' . $p->id . '">
          <img src="'.$imgurl_1.''. $p->poster_path . '">
          <div class="card-body">
          <h5 class="card-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h5>
          <p><em>Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></p>
          <p>Release : ". date('d F Y', strtotime($p->release_date)) . "</p>
          </div>
          </a>
          </div>
          </div>
          ";
        }
      ?>
          </div>
        </div>
      </div>


<?php
  include_once "footer.php";
?>