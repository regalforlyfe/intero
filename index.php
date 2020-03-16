<?php
  include "conf/info.php";
  $title="Welcome to";
  include_once "header.php";
?>
      <div class="card">
        <div class="card-header" style="height: 60px;">
          <h3 class="text-center">- Top Rated Movies -</h3>
        </div>
        <div class="card-body">
          <div class="container">
          <div class="row justify-content-md-center">
            
              <?php
                include_once "api/api_toprated.php";
                foreach($toprated->results as $p){
                  echo 
                  '<div class="col-sm">
                    <div class="card text-center" style="width: 250px; height:550px;">
                    <a href="movie.php?id=' . $p->id . '">
                    <img src="http://image.tmdb.org/t/p/w200'. $p->poster_path . '" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h5>
                        <p> <em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></p>
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