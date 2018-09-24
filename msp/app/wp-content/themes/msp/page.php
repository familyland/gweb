<?php get_header() ?>
<div id="content" class="page">
		<section class="page-header">
			<h1><?php the_title(); ?></h1>
		</section>
    <div class="page-content">
	<?php if(have_posts()): while(have_posts()): the_post();?> <?php the_content(); ?> <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer() ?>
