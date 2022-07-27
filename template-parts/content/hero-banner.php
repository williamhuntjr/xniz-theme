<section id="hero-template" style="background-image: url('<?php echo get_field( 'hero_image' );?>');">
  <div class="hero-overlay" style="color: <?php echo get_field( 'text_color');?> !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-<?php echo get_field( 'text_align' );?>">
          <?php 
            $hero_headline = get_field( 'hero_headline' ); 
            $hero_text = get_field( 'hero_text' ); 
          ?>
          <h1><?php echo $hero_headline;?></h1>
          <p class="body-text"><?php echo $hero_text;?></p>
        </div>
      </div>
    </div>
  </div>
</section>