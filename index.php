<?php
//get the header.php
get_header();?>
<div class="site-content clearfix">
	<div class="main-column">

	<?php //the loop ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-info"><?php the_time('F j, Y g:i a'); ?> by <a href="#"><?php the_author(); ?></a></p>
			<?php the_content(); ?>
		</article> 
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<?php echo "you have no balls" ?>
	<?php endif; ?>
</div>
<div class="secondary-column">

<p><?php dynamic_sidebar(sidebar1); ?></p>
</div>







</div>


<?php
//get the footer.php 
get_footer();
?>