<?php get_header(); ?>

<section class="home_top">
	<div class="flexslider">
		<ul class="slides">
			<?php while(has_sub_field('homepage_slides')) : ?>
			<?php $image = get_sub_field('slide_image'); ?>
				<li><img src="<?php echo $image['url']; ?>" /></li>
			<?php endwhile; ?>
		</ul>	
	</div>
</section>
<section class="one">
	<div class="container">
		<div class="one_content">
			<div class="section_title">
				<h1>About Us</h1>
			</div>
			<div class="two_column">
				<?php while(has_sub_field('two_column_top')) : ?>
					<div class="column">
						<?php the_sub_field('two_column'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>