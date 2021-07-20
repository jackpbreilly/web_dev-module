<?php
$mountainData = getAllMountains($conn);
?>

<div class="row">
    <?php
    for ($x = 0; $x < sizeof($mountainData);) {
        $mountainDisplayImageData = getMountainDisplayImage($mountainData[$x]->mountainId, $conn);
        ?>
        <div class="col-md-4 card" style="width:400px">
            <a href="?category=<?php echo $mountainData[$x]->mountainId ?>"> <img class="card-img-top"
                                                                                  src="img/<?php echo $mountainDisplayImageData[0]->imgLink ?>"
                                                                                  alt="Card image" style="width:100%">
            </a>
            <div class="card-body">
                <h4 class="card-title"><?php echo $mountainData[$x]->mountainName ?></h4>
                <p class="card-text"><?php echo $mountainData[$x]->mountainDescription ?></p>
            </div>
        </div>
        <?php $x++;
    }; ?>
</div>