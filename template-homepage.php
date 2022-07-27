<?php
/* Template Name: Homepage Template */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/homepage/banner', '' ); ?>
<?php get_template_part( 'template-parts/content/homepage', '' ); ?>

<main class="full-width-page flex-fill">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <?php the_content();?>
        <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>