<?php 
/*
	Template Name: contact
*/
get_header(); 
?> 
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
          <?php 
            $loop = CFS()->get('city');
            foreach($loop as $row){
          ?>
            <div class="contacts-block">
              <h2><?= $row['title']; ?></h2>
              <div class="contacts-inner">
                <div class="contacts-card">
                  <img src="<?= CFS()->get('write_image'); ?>" alt="write_to_us">
                  <h3><?= CFS()->get('write_to_us'); ?></h3>
                  <p><?= $row['email']; ?></p>
                </div>
                <div class="contacts-card">
                  <img src="<?= CFS()->get('call_us_image'); ?>" alt="<?= CFS()->get('call_us'); ?>">
                  <h3><?= CFS()->get('call_us'); ?></h3>
                  <p><?= $row['phone']; ?></p>
                </div>
                <div class="contacts-card">
                  <img src="<?= CFS()->get('come_to_us_image'); ?>" alt="<?= CFS()->get('come_to_us'); ?>">
                  <h3><?= CFS()->get('come_to_us'); ?></h3>
                  <p><?= $row['address']; ?></p>
                </div>
              </div>
              <?= $row['branches_maps']; ?>
            </div>
                
              <?php
            }
            ?>
          
        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS()->get('dealer_title'); ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
          <?php 
            $loop = CFS()->get('dealers');
            foreach($loop as $row){
              ?>
                <li><p class="city"><?= $row['address_dealers']; ?></p></li>
              <?php
            }
            ?>
            
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>