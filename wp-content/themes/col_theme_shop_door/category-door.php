<?php get_header(); ?>
  <!-- Каталог -->
<?php $settings= get_posts([
	'numberposts' => 1,
	'category_name' => 'settings',
	'post_type' => 'post',
]); 
	foreach ($settings as $post){
		setup_postdata($post);
		?>
			<div class="popular" style="background-image: url(<?= CFS()->get('fon_catalog1'); ?>)">
		<?php
	}
	wp_reset_postdata();
	?>


		<div class="container">
			<div class="row popular-title">
				<h2> <?= single_cat_title(); ?></h2>
			</div>
			<div class="category-controll text-center">
				<button class="btn" type="button" data-filter="all">All</button>
				<button class="btn" type="button" data-filter=".<?= get_category(8, ARRAY_A)['slug'] ?>">
				<?= get_category(8, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-filter=".<?= get_category(9, ARRAY_A)['slug'] ?>">
				<?= get_category(9, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-filter=".<?= get_category(10, ARRAY_A)['slug'] ?>">
				<?= get_category(10, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-sort="order:asc">Ascending</button>
				<button class="btn" type="button" data-sort="order:descending">Descending</button>
			</div>
			<div class="row popular-goods catalog">
			<?php 
				if( have_posts()){
					while(have_posts()){
						the_post();
						$all_categroy = get_the_category();
						$res_name = '';
						foreach($all_categroy as $category){
							if($category->term_id == 8 || 
							$category->term_id == 9 || 
							$category->term_id == 10 || 
							$category->term_id == 11){
								$res_name = $category->slug;
							}
						}
						?>
						<div class="col-4 col-lg-6 col-sm-12 advantages-card">
							<div class="col-3 col-lg-6 col-sm-12 product mix <?= $res_name ?>" data-order="<?= CFS()->get('doors_price'); ?>">
								<?php the_post_thumbnail(); ?>
								<h3><?php the_title(); ?></h3>
								<div><?= CFS()->get('doors_price'); ?> MDL</div>
								<a href="<?php the_permalink(); ?>" class="btn"><?= CFS()->get('text_bottom'); ?></a>
							</div>
						</div>

						<?php
					}
				}
				?>
				
			</div>
			<?php the_posts_pagination(); ?>
		</div>
	</div>
  <!-- Футер -->
<?php get_footer() ?>