<!DOCTYPE html>
<div class="containerfix">
<ul id="boxline" class="clearfix">
    <article role="article" id="post_<?php the_ID()?>">

        <section>
            <?php the_post_thumbnail(); ?>
            <li>

            <div class="textinfo pull-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
            <div class="textbox pull-right">
            <div class="text-left">


            
               <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
				<div class="largep">
				<p><?php the_content( __( '&hellip; ' . __('Continue reading', 'bst' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bst' ) ); ?></p>
				</div>
               <em>
                 <h3><?php _e('By', 'bst'); echo " "; the_author() ?>,</h3>
                 <h4><time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?>
                 <br><?php _e('Category', 'bst'); ?>: <?php the_category(', ') ?><br/></time>
                 <?php _e('Comments', 'bst'); ?>: <?php comments_popup_link(__('None', 'bst'), '1', '%'); ?>
                 </h4>
               </em>
</div> <!--textbox div-->
        </section>
       
    </article>
  </ul>
	</ul>
</div>
