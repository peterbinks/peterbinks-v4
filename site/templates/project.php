<?php snippet('header') ?>
<?php snippet('menu') ?>

  <div id="container">

    <h2><?php echo $page->title()->html() ?></h2>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </div>

<?php snippet('footer') ?>