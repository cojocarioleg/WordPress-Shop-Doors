<?php get_header(); ?>
  <!-- Страница одной двери -->
  <div class="door-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="door-gallery">
          <?php 
            $loop = CFS()->get('gallery');
            foreach($loop as $row){
              ?>
                <a href="<?= $row['gallery_photo']; ?>" data-caption="">
                  <img src="<?= $row['gallery_photo']; ?>" alt="">
                </a>
                
              <?php
            }
            ?>
                        
          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2><?php the_title(); ?>
            <span>
              <?php 
                if(CFS()->get('in_stok')){
                  echo CFS()->get('text_in_stok');
                } else{ 
                echo CFS()->get('text_order_door');
              }
              ?>
            </span>
          </h2>
          <?php the_content();?>
          <h3><?= CFS()->get('doors_price'); ?> MDL</h3>
            <?= do_shortcode(CFS()->get('short_code_form')); ?>
		 
          <table>
            <caption><?= CFS()->get('title_characteristic'); ?></caption>
            <?php 
            $loop = CFS()->get('characteristics');
            foreach($loop as $row){
              ?>
                <tr>
                  <td><?= $row['key']; ?></td>
                  <td><?= $row['key_value']; ?></td>
                </tr>
                
              <?php
            }
            ?>
          </table>
          <a class="btn" href="<?= CFS()->get('info_slug'); ?>"> Importan Informaton</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
<?php get_footer(); ?>