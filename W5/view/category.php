<?php
$articleListData = getListOfArticles($_GET["category"], $conn); // Links articles together
$articlesData = getAllArticles($articleListData[0]->articleId, $conn);
?>

<div class="row">
    <?php
    for ($x = 0; $x < sizeof($articlesData);) {
        $articleImageData = getArticleDisplayImage($articlesData[$x]->articleId, $conn);
        ?>
        <div class="col-md-4 card" style="width:400px">
            <a href="?article=<?php echo $articlesData[$x]->articleId ?>"><img class="card-img-top"
                                                                               src="img/<?php echo $articleImageData[0]->imgLink ?>"
                                                                               alt="Card image" style="width:100%"></a>
            <div class="card-body">
                <h4 class="card-title"><?php echo $articlesData[$x]->articleTitle ?></h4>
            </div>
        </div>
        <?php $x++;
    }; ?>
</div>