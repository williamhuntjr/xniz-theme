<?php
/* Template Name: 404 Not Found Page */
?>

<?php get_header(); ?>
  <main id="not_found" class="container flex-fill center-middle">
  
    <div class="container">
      <div class="row section">
        <div class="col-12 text-center">
          <h1>Page Not found</h1>
          <p>The URL you are attempting to access does not exist. Please check the spelling and try again.</p>
          <a href="<?php echo get_site_url(); ?>" class="btn btn-lg btn-primary">Go Home</a>
        </div>
      </div>

    </div>

  </main>

<?php get_footer(); ?>
