<?php 
/*
	Template Name: main
*/
get_header(); 
?> 
	<!-- Шапка -->
	<div class="header" style="background-image: url(<?= CFS()->get('fon_header'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-12">
					<div class="header-inner">
						<div class="header-catalog">
							<h2><?= CFS()->get('catalog_title'); ?></h2>
							<div class="doors">
							<?php 
								$loop = CFS()->get('catalog_loop_1');
								foreach($loop as $row){
									?>
										<div class="door">
											<div class="name" style="background-image: url(<?= $row['image_catalog_loop_1']; ?>)">
												<?= $row['text_catalog_loop_1']; ?>
											</div>
									</div>
										
									<?php
								}
								?>
														
							</div>
							<a class="btn" href="/col_shop_wp/category/<?= CFS()->get('link_button_loop2'); ?>">
								<?= CFS()->get('text_button_loop2'); ?>
							</a>
						</div>
						<div class="header-order">
							<h2><?= CFS()->get('order_title'); ?></h2>
							<div class="doors">
							<?php 
								$loop = CFS()->get('catalog_loop_2');
								foreach($loop as $row){
									?>
										<div class="door">
											<div class="name" style="background-image: url(<?= $row['image_catalog_loop_2']; ?>)">
												<?= $row['text_catalog_loop_2']; ?>
											</div>
									</div>
										
									<?php
								}
								?>
																
							</div>
							<a class="btn" href="/col_shop_wp/<?= CFS()->get('link_button_loop1'); ?>/">
								<?= CFS()->get('text_button_loop1'); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Преимущества  -->
	<?php get_header( 'advantages' ); ?>
	<!-- О нас -->
	<div class="about" style="background-image: url(<?= CFS()->get('fon'); ?>)">
		<div class="container">
			<div class="row about-inner">
				<div class="col-6 col-lg-12">
					<h2><?= CFS()->get('fon_about_title'); ?></h2>
					<p><?= CFS()->get('fon_about_text'); ?></p>
				</div>
				<div class="col-6 col-lg-12 text-center">
					<a href="/col_shop_wp/category/<?= CFS()->get('link_button_loop2'); ?>" class="btn">
						<?= CFS()->get('text_button_fon'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Популярные товары -->
	<div class="popular" style="background-image: url(<?= CFS()->get('about_bg_2'); ?>)">	
		<div class="container">
			<div class="row popular-title">
				<h2><?= CFS()->get('popular_doors'); ?></h2>
			</div>

			<div class="row popular-goods">
			<?php 
				$posts = get_posts([
					'numberposts' => 8,
					'category_name' => 'doors_popular',
					'orderby' => 'title',
					'order' => 'ASC', 
					'post_type' => 'post', 
					'suppers_filter' => true
				]);
				
				foreach($posts as $post){
					setup_postdata($post);
				?>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<?php the_post_thumbnail(''); ?>
					<h2> <?php the_title();?> </h2>
					<div><?= CFS()->get('doors_price'); ?> MDL</div>
					<a href="<?php the_permalink(); ?>" class="btn"><?= CFS()->get('text_bottom'); ?></a>
				</div>
				<?php 
					} 
					wp_reset_postdata();  
				?>
		
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="/col_shop_wp/category/<?= CFS()->get('link_button_loop2'); ?>" class="btn">
						<?= CFS()->get('text_button_fon'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Форма обратной связи -->
	<div class="contacts" style="background-image: url(<?= CFS()->get('feedback_form_fon'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-4 col-lg-12 contacts-item">
					<h3><?= CFS()->get('feedback_form_title'); ?></h3>
					<p><?= CFS()->get('feedback_form_text'); ?></p>
					<?= do_shortcode(CFS()->get('feedback_contact_form')); ?>
				</div>

			
					<?php 
				$posts = get_posts([
					'numberposts' => 2,
					'category_name' => 'form',
					'orderby' => 'title',
					'order' => 'ASC', 
					'post_type' => 'post', 
					'suppers_filter' => true
				]);
				
				foreach($posts as $post){
					setup_postdata($post);
				?>
					<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
						<?php the_post_thumbnail('add_image'); ?>
						<h3> <?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				
				<?php 
					} 
					wp_reset_postdata();  
				?>

			</div>
		</div>
	</div>
	<!-- Футер -->
	<?php get_footer(); ?>