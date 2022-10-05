<?php
$title = "Blog";
include("Master/header.php");
require("database/Model.php");

$model = new Model();
$posts = $model->getPosts();
$posts = $posts->fetchAll(PDO::FETCH_OBJ);
?>

<style>
    .post {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .post img {
        width: 100%;
    }

    .post #title {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .post p {
        text-align: justify;
    }
</style>

<div class="container mt-9" style="min-height: 50vh;">
    <div class="row">
        <?php
        foreach ($posts as $post) {
            $date = date("m/d/Y", $post->regdate);
        ?>
            <div class="post col-4">
                <img src="assets/uploads/<?php echo $post->attachment; ?>" alt="">
                <div id="title">
                    <h5><?php echo $post->title; ?></h5>
                    <span><?php echo $date; ?></span>
                </div>
                <p><?php echo $post->details; ?></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php
include("Master/footer.php");
?>