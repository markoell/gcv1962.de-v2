<?php snippet('header'); ?>
<h1><?= $page->title() ?></h1>
<div>
  <p><?= $page->text()->kirbyText() ?></p>
  <p><?php dump($page) ?></p>
  <p><?php dump($page->template()->name()) ?></p>

</div>