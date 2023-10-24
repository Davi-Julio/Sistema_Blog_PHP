<?php 

include_once 'templates/header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $current;

    foreach($posts as $value){

        if($value['id'] == $id){
            $current = $value;
        }
    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $current['title']?></h1>
        <p id="post-description"><?=$current['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?= $current['img']?>"alt="">
        </div>
        <p class="post-contente">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero consectetur ut, nemo possimus iste repudiandae! Quis minima ea consequuntur repellendus!
        </p>
    </div>

    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php 
        foreach($current['tags'] as $tag){
            ?>
            <li><a href="#"><?=$tag?></a></li>
             <?php
        }
        ?>
        <h3 id="categorias-title">Categorias</h3>
        <ul id="categorias-list">
            <?php
            foreach($categories as $category){
                ?>
                <li><a href="#"><?=$category?></a></li> 
                <?php
            }
            ?>
        </ul>

    </ul>
</aside>

</main>


<?php 

include_once 'templates/footer.php';

?>