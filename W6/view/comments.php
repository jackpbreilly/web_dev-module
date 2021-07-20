<?php
$commentData = getCommentData($_GET["article"], $conn);
addComment($_GET["article"],$conn);
?>

<div id="post-comment" class="jumbotron silver-bg">
    <p class="lead">Post a comment.</p>
    <form method="POST">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Write a comment about the article</label>
            <textarea class="form-control" name="comment" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Post Comment</button>

    </form>
</div>


<?php for ($i = 1; $i < count($commentData); $i++){ ?>
    <div id="comment" class="jumbotron <?php if($i %2==0){echo "silver-bg";}?>">
        <p class="lead"><?php echo $commentData[$i]->comment ?> </p>
    </div>
<?php } ?>


