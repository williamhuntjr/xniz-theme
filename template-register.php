<?php
/* Template Name: Register Page */

if ( isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) ) {
  $user_login     = esc_attr($_POST["username"]);
  $user_password  = esc_attr($_POST["password"]);
  $user_email  = esc_attr($_POST["email"]);
  $user_first_name = esc_attr($_POST["firstname"]);
  $user_last_name = esc_attr($_POST["lastname"]);

  $user_id = username_exists( $user_login );

  $userdata = array(
    'user_login'  =>  $user_login,
    'user_pass'   =>  $user_password,
    'user_email'  =>  $user_email,
    'first_name'  =>  $user_first_name,
    'last_name'   =>  $user_last_name
  );

  if ( !$user_id && email_exists($user_email) == false ) {
    $user = wp_insert_user( $userdata ) ;
    if (is_wp_error($user)) {
      $wp_errors = $user;
    }
    else { 
      header("Location: /login");
      die();
    }
  }
  else { $user_exists = true; }
}
?>
<?php if (!is_user_logged_in()) :?>
<?php get_header(); ?>
<main id="register" class="flex-fill center-middle">
  <div class="container">
    <div id="register-form-container">
      <div class="row">
        <div class="col-12">
        <h1>Enter your details</h1>

          <form method="post" id="register-form">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input required type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
            </div>
            <hr>
            <div class="form-group">
              <label for="username">Username</label>
              <input required type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <?php if( $user_exists ) : ?>
            <p><strong>ERROR: The specified e-mail address or username already exists!</strong></p>
            <?php endif; ?>

            <?php if( $wp_errors ) : ?>
            <?php echo '<p>' . $wp_errors->get_error_message() . '</p>';?>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary">Register</button>
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