<div class="row">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if (isset($_GET['scat'])) {
        $cat = mysqli_real_escape_string($conn, $_GET['scat']);
        $query = "SELECT * FROM producten WHERE subcatNaam='$cat' LIMIT 9";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
            // Class van product
            echo"<div class=\"col-sm-4 col-lg-4 col-md-4\">";
            echo"<div class=\"thumbnail\">";
            // IMG inladen
            echo"<img src=\"". $row['productImage1'] ."\" alt=\"\">";
            echo"<div class=\"caption\">";
            echo"<h4 class=\"pull-right\">". $row['productPrijs'] ."</h4>";
            echo"<h4><a href=\"?page=productpage\">". $row['productNaam'] ."</a></h4>";
            echo"<p>See more snippets like this online store item at</p></div>";
            echo"<div class=\"ratings\">";
            echo"<p class=\"pull-right\">15 reviews</p>";
            echo"<p><span class=\"glyphicon glyphicon-star\"></span></p>";
            echo"</div></div></div>";
        }
    } else if (isset($_GET['mcat'])) {
        $mcat = mysqli_real_escape_string($conn, $_GET['mcat']);
        $query = "SELECT * FROM producten WHERE maincatNaam='$mcat' LIMIT 9";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
            // Class van product
            echo"<div class=\"col-sm-4 col-lg-4 col-md-4\">";
            echo"<div class=\"thumbnail\">";
            // IMG inladen
            echo"<img src=\"". $row['productImage1'] ."\" alt=\"\">";
            echo"<div class=\"caption\">";
            echo"<h4 class=\"pull-right\">". $row['productPrijs'] ."</h4>";
            echo"<h4><a href=\"?page=productpage\">". $row['productNaam'] ."</a></h4>";
            echo"<p>See more snippets like this online store item at</p></div>";
            echo"<div class=\"ratings\">";
            echo"<p class=\"pull-right\">15 reviews</p>";
            echo"<p><span class=\"glyphicon glyphicon-star\"></span></p>";
            echo"</div></div></div>";
        }
    }
    ?>
</div>