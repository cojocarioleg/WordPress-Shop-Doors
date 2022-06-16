<?php 
/*
	Template Name: policy
*/
get_header(); 
?> 

  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url(<?= CFS()->get('background-image'); ?>)">
    <div class="container">
      <div class="row">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>