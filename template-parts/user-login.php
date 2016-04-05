<?php if ( is_user_logged_in() ) :
  $current_user = wp_get_current_user();
?>
<div class="user-menu">
  <div class="media">
    <div class="user-avatar media-left media-middle">
      <?php echo get_avatar($current_user->user_email); ?>
    </div>
    <div class="user-details media-body media-middle">
      <h4 class="media-heading"><?php echo $current_user->display_name; ?></h4>
      <div class="btn-group" role="group" aria-label="User Profile/Logout">
        <a class="btn btn-default" title="Profile" href="<?php echo admin_url('/profile.php'); ?>">Profile</a>
        <a class="btn btn-default" title="Log Out" href="<?php echo wp_logout_url( get_permalink() ); ?>">Log Out</a>
      </div>
    </div>
  </div>
</div> <!-- /.user-menu -->
<?php else : ?>
<div class="user-login">
  <div class="btn-group" role="group" aria-label="User Login/Signup">
    <a class="btn btn-default" title="Sign Up" href="<?php echo wp_registration_url( get_permalink() ); ?>">Sign Up</a>
    <a class="btn btn-default" title="Log In" href="<?php echo wp_login_url( get_permalink() ); ?>">Log In</a>
  </div>
</div> <!-- /.user-login -->
<?php endif; ?>