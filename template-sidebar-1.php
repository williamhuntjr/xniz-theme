<?php
/* Template Name: Right Sidebar 1 */
?>

<?php get_header(); ?>

<main class="small-width-page right-sidebar-1 flex-fill">

  <div class="container">
    <div class="row">

      <div class="col-lg-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <?php the_content();?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="col-lg-3">
      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="primary-sidebar-1" class="primary-sidebar widget-area" role="complementary">
          <ul>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </ul>
        </div>
      <?php endif; ?>
      </div>

    </div>
  </div>
  
</main>
<?php get_footer(); ?>