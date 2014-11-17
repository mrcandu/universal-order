<?php get_header(); ?>
      <main>
      <section class="main">
              
        <?php while ( have_posts() ) : the_post(); ?>
        <article>
          <h1><?php the_title(); ?></h1>
          <em><?php echo get_the_date(); ?></em>
          <section>
            <?php the_content(); ?>
          </section>
        </article>
        <?php endwhile; ?> 
        
      </section>

      <section class="right">
        <?php get_sidebar(); ?>       
      </section>
      
      </main>
<?php get_footer(); ?>