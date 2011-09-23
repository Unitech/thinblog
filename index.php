<?php get_header(); ?>

    <div id="coreContent" class="hfeed">
      
    	<?php if (have_posts()) : ?>

    		<?php while (have_posts()) : the_post(); ?>

      <div class="post hentry home-article" onclick="window.location = '<?php the_permalink() ?>'">
           

	        <div class="postContent">
          <h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

<div class="date">
<?php	printf( __( '<time class="entry-date">%1$s</time>', 'twentyeleven' ),
		esc_html( get_the_date() )
	); ?>
</div>


        </div>
	<div class="excerpt">
	<?php echo excerpt(20) ?>	
	</div>
<!-- [<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">full article</a>]-->
        <div class="postMeta">
        

        </div>
      </div>

		<?php endwhile; ?>

    <div class="pageNav">
      <div class="prev"><?php next_posts_link('&laquo; Older') ?></div>
      <div class="next"><?php previous_posts_link('Newer &raquo;') ?></div>
    </div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

  </div>


<?php get_footer(); ?>
