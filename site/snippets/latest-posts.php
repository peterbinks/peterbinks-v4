<h2>Latest posts</h2>

<ul class="posts-teaser">
  <?php foreach(page('blog')->children()->visible()->flip()->limit(3) as $post): ?>
  <li>
    <h3><a href="<?php echo $post->url() ?>"><?php echo $post->title()->html() ?></a></h3>
    <p><?php echo $post->text()->excerpt(80) ?> <a href="<?php echo $post->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $post->images()->sortBy('sort', 'asc')->first()): ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
