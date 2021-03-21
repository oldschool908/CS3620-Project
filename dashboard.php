<?php
require_once("sessioncheck.php");
require_once('./header.php');
require_once('./footer.php');
?>

<main role="main" class="container">
<h1 class="mt-5">Daniel's Favorite Shows</h1>

<?php

if(isset($_GET["del"]) AND $_GET["del"] == "true"){
  echo "<script>alert('Show was deleted!');</script>";
}
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        require_once('./shows/show.php');

        $show = new show();
        $shows = $show->getMyShows($_SESSION["user_id"]);  

        $arrlength = count($shows);

        for($x = 0; $x < $arrlength; $x++) {
            echo '<div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">' . $shows[$x]->getShowTitle() . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: ' . $shows[$x]->getShowRating() . '</h6>
                        <p class="card-text">' . $shows[$x]->getShowDescription() . '</p>
                        <a href="delete_show.php?show_id=' . $shows[$x]->getShowId() . '" class="card-link">Delete Show</a>
                    </div>
                  </div>
                  <br />';
        }
      ?>

    </main>


