<?php
$articleData = getArticle($_GET["article"], $conn);
$imageData = getArticleImages($_GET["article"], $conn);
$i = 0; // Counter for "active" in carousel
?>


<div class="jumbotron">
    <h1><?php echo $articleData[0]->articleTitle; ?></h1>
    <p><?php echo $articleData[0]->articleAuthor; ?></p>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="height:200px;">
        <?php
        for ($x = 0; $x < sizeof($imageData);) {
            $i++;
            ?>
            <div class="carousel-item<?php if ($i === 1) {
                echo " active";
            } ?>">
                <img class="d-block w-100" width = "300px" height ="300px"src="img/<?php echo $imageData[$x]->imgLink; ?>" alt="First slide">
            </div>
            <?php $x++;
        } ?>
    </div>
</div>

<p><?php echo $articleData[0]->articleText; ?></p>



  
   
  
  
  

