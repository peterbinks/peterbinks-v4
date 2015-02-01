<?php snippet('header') ?>
<?php snippet('menu') ?>
<div id="container">

 <article class="content">
    <?php echo kirbytext($page->text()) ?>
  </article>

</div>
<?php snippet('footer') ?>