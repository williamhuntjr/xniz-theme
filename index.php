<?php get_header(); ?>
  <main class="container-fluid flex-fill">
    <div class="row">

      <div class="col-12">
        
        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <?php the_content();?>
        <?php endwhile; ?>
        <?php endif; ?>

      </div>

    </div>
  </main>
<?php get_footer(); ?>