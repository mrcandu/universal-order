<?php get_header(); ?>
      <main>
      <section class="main">
               
        <?php while ( have_posts() ) : the_post(); ?>
        
        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <time datetime="<?php echo get_the_date(); ?>" title="<?php echo get_the_date(); ?>">
          <?php echo get_the_date(); ?>
        </time>

        <article>
          <section>
            <?php the_content(); ?>
            <p class="read"><a href="<?php the_permalink(); ?>">Read more</a></p>
          </section>
        </article>
        
        <?php endwhile; ?> 
        
      </section>

      <aside>
        <?php get_sidebar(); ?>       
      </aside>
      
      </main>
<?php get_footer(); ?>