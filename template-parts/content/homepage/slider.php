<div id="slider">

<?php 
global $post;

$slides = get_posts(array(
	'posts_per_page'	=> -1,
  'post_type'			=> 'slides',
  'order'         => 'asc'
));

$counter = 0
?>

<?php if( $slides ): foreach( $slides as $post ):?>
<?php ++$counter; ?>

<?php setup_postdata( $post );?>

<div class="slide slide-<?php echo $counter;?>" style="background-image: url('<?php the_field('desktop_featured_image');?>');">
  <div class="slider-overlay">
  <i class="fas fa-angle-left fa-2x control left"></i>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="color: <?php echo get_field('text_color');?>"><?php echo get_field('headline')?></h1>
          
          <?php if (!empty(get_field('description'))) :?>
          <p style="color: <?php echo get_field('text_color');?>"><?php echo get_field('description');?></p>
          <?php endif;?>
          
          <?php if (get_field('slide_button')) :?>
          <a href="<?php echo get_field('slide_button_link');?>" class="btn btn-lg" style="background-color: <?php echo get_field('slide_button_background_color');?>; color: <?php echo get_field('slide_button_text_color');?>"><?php echo get_field('slide_button_text');?></a>
          <?php endif;?>

        </div>
      </div>
    </div>
  <i class="fas fa-angle-right fa-2x control right"></i>
  </div>
</div>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>