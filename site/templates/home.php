<?php

use Kirby\Cms\Section;

snippet('header'); ?>
    <h1><?= $page->title() ?></h1>
    <?php foreach ($page->children()->listed() as $section) : ?>
      <?php snippet($section->uid(),['section' => $section]) ?>
    <?php endforeach ?>
  </body>

</html>