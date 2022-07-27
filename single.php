<?php get_header(); ?>

<main id="blog-single" class="small-width-page flex-fill">
  <div class="container post-container">
    <div class="row">
      <div class=" col-md-12 col-lg-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <h2 class="mb-0"><?php the_title();?></h2>
        <p class="mb-3">Posted by <?php the_author(); ?> - <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>

        <?php the_content();?>
        <?php endwhile; ?>

        <?php
        	if ( comments_open() || get_comments_number() ) {
            comment_form(array('class_submit'=>'btn btn-primary'));
          }
        ?>
        <?php endif; ?>
        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="go-back"><-- Go back</a>
      </div>


      <div class="col-md-12 col-lg-3 sidebar recent-posts">
        <h2>Recent Posts</h2>
        <ul>
          <?php $recent_posts = wp_get_recent_posts(); ?>
          <?php foreach( $recent_posts as $recent ) : ?>
            <li><a href="<?php echo get_permalink($recent["ID"]);?>"> <?php echo $recent["post_title"];?></a> </li>
          <?php endforeach;?>
          <?php wp_reset_query(); ?>
        </ul>
      </div>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>
