<?php 

include_once 'templates/header.php';

?>

<main>
    <div id="title-container">
        <h1>Blog Codar</h1>
        <p> O seu Blog De Programação</p>
    </div>
    <div id="posts-container">
        <?php 
        foreach($posts as $value){
            ?> 
            <div class="post-box">
            <img src="<?= $BASE_URL ?>/img/<?= $value['img']?>" alt="<?= $value['title']?>">
            <h2 class="post-title">
                <a href="<?= $BASE_URL?>post.php?id=<?= $value['id']?>"><?= $value['title']?></a>
            </h2>
            <p class="post-description"><?= $value['description']?></p>
            <div class="tags-container">
                <?php

                foreach($value['tags'] as $tags)
               {
                ?>
                 <a href="#"><?= $tags?></a>
                <?php
               } 
                ?>
            </div>
            </div>
            <?php
        }
        ?>
    </div>
</main>

<?php 

include_once 'templates/footer.php';
?>
    