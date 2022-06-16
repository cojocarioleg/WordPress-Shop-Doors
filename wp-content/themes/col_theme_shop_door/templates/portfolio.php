<?php 
/*
	Template Name: portfolio
*/
get_header(); 
?> 
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(<?= CFS()->get('portfolio_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">
            <?php 
            $loop = CFS()->get('portfolio');
            foreach($loop as $row){
              ?>
                <a href="<?= $row['porfolio_image']; ?>" data-caption="<?= $row['short_description']; ?>">
                  <img src="<?= $row['porfolio_image']; ?>" alt="<?= $row['portfolio_title']; ?>">
                </a>
                
              <?php
            }
            ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
	<?php get_footer(); ?>