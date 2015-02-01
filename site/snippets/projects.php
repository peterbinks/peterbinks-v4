<h2>Latest projects</h2>

<ul class="portfolio-teaser">
  <?php foreach(page('portfolio')->children()->visible()->limit(4) as $project): ?>
  <li class="effect-julia">
    <!--
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>-->
    <a href="<?php echo $project->url() ?>">

      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class="thumbnail">

      <figcaption>
      <h3><?php echo $project->title()->html() ?></h3>
      <p><?php echo $project->tags() ?></p>
      </figcaption>

    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
