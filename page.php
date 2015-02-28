<?php
get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="page post">
		<?php  $args=array(
		'child_of'=>amar_bap_dada(),
		'title_li'=>''

		);
		?>

		<?php wp_list_pages($args); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</article> 
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<?php echo "you have no balls" ?>
<?php endif; ?>








 

<?php 
get_footer();
?>