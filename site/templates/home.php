<?php snippet('header') ?>
<?php snippet('menu') ?>
<div id="container">

 <article>
 	<div id="intro">
    <?php echo kirbytext($page->text()) ?>
    </div>
  </article>


<div id="work">
<?php snippet ('projects'); ?>
</div>

<hr>

<div id="blog">
<?php snippet ('latest-posts'); ?>
</div>

</div>
<?php snippet('footer') ?>