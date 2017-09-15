<!DOCTYPE html>
<ul id="boxline" class="clearfix">
  <article role="article" id="post_<?php the_ID()?>">
        <header>
        </header>
        <section>
            <li>
            <div class="textinfo pull-left"><i class="fa fa-link" aria-hidden="true"></i></div>
            <div class="textbox pull-right">
            <div class="text-center">

            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>



            <?php the_post_thumbnail(); ?>


            <h3><?php the_content( __( '&hellip; ' . __('Continue reading', 'bst' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bst' ) ); ?></h3>


          <em>
            <h3><span class="text-muted author"><?php _e('By', 'bst'); echo " "; the_author() ?>,</span></h4>
            <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
          </em>
        </h4>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'bst'); ?>: <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bst'); ?>: <?php comments_popup_link(__('None', 'bst'), '1', '%'); ?>
            </p>
               </div> <!--textbox div-->
            </section>
        </footer>
    </article>
