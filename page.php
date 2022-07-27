<?php get_header(); ?>

<?php if (is_front_page()) : ?>
<?php get_template_part( 'template-parts/content/homepage/banner', '' ); ?>
<?php get_template_part( 'template-parts/content/homepage', '' ); ?>
<?php endif;?>

<main class="flex-fill <?php echo (function_exists('is_account_page') && is_account_page()  ? 'center-middle' : '');?>">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>