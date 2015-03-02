<?php get_header(); ?>
      
    <div class="wrap">

      <main>
      <section class="main">
               
        <?php while ( have_posts() ) : the_post(); ?>
        
        <h1><?php the_title(); ?></h1>
        <time datetime="<?php echo get_the_date(); ?>" title="<?php echo get_the_date(); ?>">
          <?php echo get_the_date(); ?>
        </time>

        <article>
          <section>
            <?php the_content(); ?>
          </section>
        </article>
        
        <?php endwhile; ?> 
        
      </section>

      <aside>
        <?php get_sidebar(); ?>       
      </aside>
      
      </main>
      
    </div>
<?php get_footer(); ?>