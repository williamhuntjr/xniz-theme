<?php
/* Template Name: Login Page */
?>
<?php 

  if ( $_POST["login_username"] && $_POST["login_password"] ) {

    $user_login     = esc_attr($_POST["login_username"]);
    $user_password  = esc_attr($_POST["login_password"]);
    $remember_me  = esc_attr($_POST["remember_me"]);

    $creds = array();
    $creds['user_login'] = $user_login;
    $creds['user_password'] = $user_password;

    if ($remember_me == 'on') { $remember_me_confirm = true; }
    else { $remember_me_confirm = false; }

    $creds['remember'] = $remember_me_confirm;

    $user = wp_signon( $creds, $remember_me_confirm );
    if (is_wp_error($user)) {
      $wp_errors = $user;
    }
    else { 
      if ($_SESSION['is_ordering']) { 
        header("Location: /checkout");
        die();
      }
      else {
        header("Location: /");
        die();
      }
    }
  }
?>

<?php if (!is_user_logged_in()) :?>

<?php get_header(); ?>

<main id="login" class="flex-fill center-middle">
  <div class="container">
    <div id="login-form-container">
      <div class="row">
        <div class="col-12">
          <h1>Please sign in</h1>
          <form id="login-form" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="login_username" name="login_username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password">
            </div>

            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
              <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
            <?php if( $wp_errors ) : ?>
            <?php echo '<p>' . $wp_errors->get_error_message() . '</p>';?>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

<?php else: ?>
<?php 
  header("Location: /");
  die();
?>
<?php endif ?>