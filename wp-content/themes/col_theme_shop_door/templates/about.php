<?php 
/*
	Template Name: about
*/
get_header(); 
?> 
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= CFS()->get('about_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_image'); ?>" alt="<?= CFS()->get('about_tab'); ?>">
          <h2><?= the_title(); ?></h2>
          <?= the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Преимущества  -->

  <?php get_header('advantages'); ?>

  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS()->get('about_inf_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?= CFS()->get('about_technical_passport_title'); ?> </h2>
          <p><?= CFS()->get('about_technical_passport_text'); ?></p>
          <a href="<?= CFS()->get('file_doc_open'); ?>" class="btn" target="_blank"><?= CFS()->get('text_open_button_about'); ?></a>
          <a href="<?= CFS()->get('file_doc'); ?>" class="btn" download=""><?= CFS()->get('text_bottom_download'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>