<?php get_header(); ?>

<main id="single-product" class="small-width-page flex-fill">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <h1 class="product-name"><?php the_title();?></h1>
        <hr>
        <?php the_content();?>
        <?php endwhile; ?>
        <?php endif;?>
      </div>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>
