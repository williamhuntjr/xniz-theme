  
<?php $homepage_banner_type = get_theme_mod( 'homepage_banner_type', 'hero' ); ?>

<?php if ($homepage_banner_type == 'hero') : ?>
<section id="hero">
  <div class="hero-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <?php 
            $hero_headline_text = get_theme_mod( 'hero_headline_text', 'Headline lorem ipsum' ); 
            $hero_body_text = get_theme_mod( 'hero_body_text', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.' ); 
            $hero_button_text = get_theme_mod( 'hero_button_text', 'More Details' ); 
            $hero_button_link = get_theme_mod( 'hero_button_link', get_site_url() ); 
          ?>
          <h1><?php echo $hero_headline_text;?></h1>
          <p class="body-text"><?php echo $hero_body_text;?></p>
          <a href="<?php echo $hero_button_link;?>" class="btn btn-hero shadow-lg"><?php echo $hero_button_text;?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php elseif ($homepage_banner_type == 'slider') : ?>
<?php get_template_part( 'template-parts/content/homepage/slider', '' ); ?>
<?php endif;?>