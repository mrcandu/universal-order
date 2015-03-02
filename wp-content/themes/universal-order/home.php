<?php get_header(); ?>

    <div class="banner">
      <div class="wrap">
        <section class="full">
            <h1>Universal Order</h1>
            <h2>Live band for hire</h2>
            <h3>Playing classics from 1960s to present day</h3>
        </section>        
        <div class="clear"></div>
      </div>
    </div>

    <div class="promo">
      
      <div class="wrap">
      
        <section class="left">
          <div class="flag">
            <h1><a href="">Booking enquiries</a></h1>
          </div>
          <h2>Need a band for your wedding reception, corporate event or party?</h2>
          <article>
            <p>If you need a band for your wedding reception, corporate event or party, hire a live band that guarantees to get your guests on their feet.</p>
            <a href="" class="link flaticon-more">Read more</a>
          </article>
        </section>
        <section class="mid">
          <div class="flag">
            <h1><a href="">Songs we play</a></h1>
          </div>
          <h2>Playing classics from 1960s to present day chart hits</h2>
          <article>
            <p>Universal Order have a large repertoire of songs to suit your event and ensure that everyone regardless of age or musical taste hears a song that will get them in the mood for dancing.</p>
            <a href="" class="link flaticon-more">Read more</a>
          </article>
        </section>
        <section class="right">
          <div class="flag">
            <h1><a href="">We are Universal Order</a></h1>
          </div>
          <h2>Playing classics from 1960s to present day</h2>
          <article>
            <p>Universal Order are a five piece cover band who have been playing together since 2013.</p>
            <a href="" class="link flaticon-more">Read more</a>
          </article>
        </section>
 
      </div>
      
      <div class="clear"></div>
    
    </div>


    <div class="wrap">

      <main>
            
        <section class="main">
        
          <strong class="title">Recent News</strong>
        
          <?php while ( have_posts() ) : the_post(); ?>
          <article>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <time datetime="<?php echo get_the_date(); ?>" title="<?php echo get_the_date(); ?>">
              <?php echo get_the_date(); ?>
            </time>
            <section>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="link flaticon-more">Read more</a>
            </section>
          </article>
          <?php endwhile; ?> 
        
        </section>

        <aside>
          <?php get_sidebar(); ?>       
        </aside>
      
      </main>
    
      <div class="clear"></div>
    
    </div>
    
<?php get_footer(); ?>