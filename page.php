<?php include(TEMPLATEPATH."/header.php");?>
<?php include(TEMPLATEPATH."/sidebar.php");?>


	<?php while ( have_posts() ) : the_post(); ?>
	<div id="right-col" class="borderbox">
	  <h2><?php the_title();?></h2>
	  <?php the_content();?>
	</div>
	<div class="clearfix"></div>
	<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>  