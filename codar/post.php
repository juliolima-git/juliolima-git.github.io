<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main class="content-container ">
    <div class="post">
        <h1><?= $currentPost['title'] ?></h1>
        <p class="post__description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="/assets/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post__content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni reprehenderit doloremque vel aliquid sed sit reiciendis labore quibusdam nulla, est placeat, velit aut perferendis dolores repellat saepe eos laudantium optio.
            Temporibus accusamus, distinctio, tenetur reiciendis amet omnis illo cum quibusdam dolore facere unde ad quis consequuntur maxime fugit magnam tempore id saepe dolores corrupti vero eius eum recusandae. Assumenda, sequi.
            Exercitationem possimus quae illum. Voluptatum reiciendis at rerum ducimus sint consequuntur? Quam corporis beatae placeat error, ab doloremque minus blanditiis veniam! Molestias provident suscipit aut nostrum. Numquam reprehenderit natus consequatur!
            Excepturi odio natus quisquam voluptatum aliquid ad esse et quasi itaque incidunt dignissimos nemo quo ducimus adipisci dicta iusto ab, eos expedita debitis! At, odit quo. Amet quidem vel similique.
            Sint doloribus aliquam laborum atque? Doloremque repudiandae beatae eum quia consectetur commodi minima laboriosam! Beatae nulla aliquid quas facere explicabo? Perspiciatis possimus, laudantium repellendus magni sit ipsam voluptatem nobis sapiente!
        </p>
    </div>
    <aside class="nav-container">
        <h3 class="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 class="categories-title">Categorias</h3>
        <ul class="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php 
    include_once("templates/footer.php");
?>