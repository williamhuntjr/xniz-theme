<?php get_header(); ?>

  <main id="blog-home" class="small-width-page flex-fill">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <?php while(have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-md-12">
              <h2><a class="post-title" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              <p class="post-excerpt"><?php echo get_the_excerpt();?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php
            the_posts_pagination( array(
              'type'               => 'list',
              'prev_text'          => __( '<small><i class="fas fa-arrow-left"></i></small>', 'xniz' ),
              'next_text'          => __( '<small><i class="fas fa-arrow-right"></i></small>', 'xniz' ),
            ) );
          ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>