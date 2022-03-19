
<!-- article.tpl.php : DÉBUT -->

<h2 class="right__title">Article</h2>
<div class="posts">

  <article class="post post--solo">
    <a href="" class="post__category post__category--color-<?= $article['category']; ?>"><?= $article['category']; ?></a>
    <h3><?= $article['title']; ?></h3>
    <div class="post__meta">
      <img class="post__author-icon" src="<?= $article['avatar']; ?>" alt="">
      <strong class="post__author"><?= $article['author']; ?></strong>
      <time datetime="<?= $article['created_at']; ?>">le <?= $dateFr ?></time>
    </div>
    <!-- p*2>lorem100 -->
    <p><?= $article['text']; ?></p>
    <a href="index.php" class="post__link">Back to home</a>
  </article>

</div>

<!-- article.tpl.php : FIN -->
