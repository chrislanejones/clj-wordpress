<?php

set_post_format($post->ID, 'quote' );

?>

<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>

            <h4>

            </h4>
        </header>
        <section>
            <?php the_post_thumbnail(); ?>
            <div class="greyblock text-center">
            <h1 class="quote-style">
               <?php the_content( __( '&hellip; ' . __('Continue reading', 'bst' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bst' ) ); ?></h1>
<h2 class="quote-style-small"><a href="<?php the_permalink(); ?>"><div class="text-center"><?php the_title()?></a></div></h2>
               <em>
                 <h4><span class="text-muted author"><?php _e('By', 'bst'); echo " "; the_author() ?>,</span>
                 <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?>
                 <br><?php _e('Category', 'bst'); ?>: <?php the_category(', ') ?><br/></time>
                 <?php _e('Comments', 'bst'); ?>: <?php comments_popup_link(__('None', 'bst'), '1', '%'); ?>
                 </h4>
               </em>
</div> <!--quote Block-->
        </section>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">


            </p>

        </footer>
    </article>
<?php endwhile; ?>


<?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: get_template_part('includes/loops/content', 'none'); endif; ?>
