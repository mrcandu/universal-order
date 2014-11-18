<?php $events_array = get_posts(array('post_type' => 'event', 'posts_per_page' => 5, 'meta_key'	=> 'event_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query'=> array(array('key' => 'event_date','compare' => '>=','value' => date('Ymd'),'type' => 'numeric')) )); ?> 
        
        <?php if($events_array): ?> 


        <strong class="title">Upcoming Gigs</strong>

<?php foreach ( $events_array as $post ) : setup_postdata( $post ); ?>
<?php $date = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>
                
        <article>
            
            <time datetime="<?php echo $date->format('Y-m-d'); ?>" title="<?php echo $date->format('Y-m-d'); ?>">
              <span class="day"><?php echo $date->format('jS'); ?></span>
              <span class="month"><?php echo $date->format('M'); ?></span>
            </time>
            
            <div class="float">              
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <em class="flaticon-map"><?php echo get_field('event_venue') ?></em>
            </div>
            
            <?php the_excerpt(); ?>
            <p class="read"><a href="<?php the_permalink(); ?>">Read more</a></p>
            
        </article>
        
<?php endforeach; wp_reset_postdata(); unset($events_array);?>

        <?php endif; ?>

        <strong class="title trax">Trax</strong>
        <article class="trax"> 
          <p>Check out a selection of our covers.</p>
            <p><iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/58547542&amp;color=e63232&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_artwork=false&amp;show_user=false&amp;show_reposts=false;"></iframe></p>
            <p class="read"><a href="https://soundcloud.com/universalorder/" target="_blank" class="flaticon-link">Follow us on Soundcloud..</a></p>
        </article>
        
        <strong class="title">#Twitter</strong>
        
        <article> 
            <p><a class="twitter-timeline" href="https://twitter.com/uniorder" data-widget-id="533588185511501825" data-link-color="#e63232" data-tweet-limit="3" data-chrome="noheader nofooter noborders transparent noscrollbar">Tweets by @uniorder</a></p>
            <p class="read"><a href="https://twitter.com/uniorder" target="_blank" class="flaticon-link">Follow us..</a></p>
        </article>