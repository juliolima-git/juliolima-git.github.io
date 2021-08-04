<?php
    include_once("templates/header.php");
?>
    <main class="container">
        <header class="container__title">
            <h1>Blog Codar</h1>
            <p>O seu blog de programação</p>
        </header>
        <section class="container__posts">
            <?php foreach($posts as $post): ?>
                <article class="post__box">
                    <img src="/public/assets/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="post__title">
                        <a href="<?= $BASE_URL ?>public/post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>
                    <p class="post__description"><?= $post['description'] ?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
<?php
    include_once("templates/footer.php");
?>