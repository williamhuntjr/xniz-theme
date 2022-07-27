      <?php if (substr(show_template(), strrpos(show_template(), '/') + 1) != 'template-landing-page.php') : ?> 
      <?php endif;?>
      <?php 
        $footer_html = get_theme_mod('footer_html', '<div class="container-fluid"><div class="row"><div class="col-12"><p class="mb-0">© <strong>Xniz Theme</strong>. All rights reserved.</p></div></div></div>');
      ?>
      <?php get_template_part( 'template-parts/custom/footer', '' ); ?>
      
      <footer>
        <?php echo $footer_html; ?>
      </footer>

      <?php wp_footer(); ?> 
    </div>
  </body>
</html>