<?php
/* Template Name: Custom Search Results */
?>
<?php
  $list = array();
  $item = array();
  $criteria = "";
  foreach($_POST as $key => $value){
    if($value != ''){
      $item['taxonomy'] = 'pa_' . htmlspecialchars($key);
      $item['terms'] = htmlspecialchars($value);
      $item['field'] = 'slug';
      $item['operator'] = 'IN';
      $criteria = $criteria . ' ' . htmlspecialchars($value); 
      array_push($list, $item);
    }
  }

  $args = array(
    'posts_per_page' => -1,
    'post_type'      => array('product'),
    'tax_query' => $list,
  );

  $the_query = new WP_Query( $args );

?>

<?php get_header(); ?>
<main class="flex-fill" id="search-results">

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">

        <header class="page-header">
          <h1 class="page-title">
            <?php printf( __( 'Search Results for: %s', 'xniz' ), $criteria ); ?>
          </h1>
        </header>
        <hr>
      </div>
    </div>

    <?php if ($the_query->have_posts()) : ?>
      <?php woocommerce_product_loop_start(); ?>
      <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
    <?php
      $thumbnail_url = get_the_post_thumbnail_url();
      if ($thumbnail_url == null) {
        $thumbnail_url = get_template_directory_uri() . '/images/image-thumbnail-2.png';
      }
    ?>
    <div class="row mb-4">
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img src="<?php echo $thumbnail_url;?>" alt="" class="img-fluid mb-3 thumbnail">
      </div>
      <div class="col-sm-12 col-md-8 col-lg-8">
        <h3><a class="text-secondary" href="<?php echo get_permalink(); ?>">
          <?php the_title();  ?>
        </a></h3>
        <hr>
        <?php 
          $excerpt = get_the_excerpt();
        ?>

        <?php if ($excerpt) : ?>
        <p class="mb-0"><?php echo $excerpt; ?></p>
        <?php else: ?>
        <p class="mb-0">There is no description available.</p>
        <?php endif;?>

        <a class="btn btn-primary mt-2 view-result" href="<?php the_permalink(); ?>">View Result</a>
      </div>
    </div>

    <?php endwhile;?>
    <div class="row pb-4">
      <div class="col-12">
        <?php echo paginate_links(); ?>
      </div>
    </div>
		<?php woocommerce_product_loop_end(); ?>

    <?php else: ?>
    <div class="row">
      <div class="col-12">
        <p>No search results</p>
        <a href="/" class="btn btn-primary">Go home</a>
      </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>