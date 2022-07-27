<?php
/* Template Name: Hero Banner */
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/content/hero-banner', '' ); ?>

<main class="flex-fill">
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