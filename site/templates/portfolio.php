<?php snippet('header') ?>
<?php snippet('menu') ?>

<div id="container">


    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

<ul class="portfolio-teaser">
  <?php foreach(page('portfolio')->children()->visible() as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3><!--
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>-->
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class="thumbnail">
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>


</div>

<?php snippet('footer') ?>