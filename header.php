<?php
/**
 * The header for our theme.
 *
 * @package Readily
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php
  if ( ! function_exists( '_wp_render_title_tag' ) ) {
  	function theme_slug_render_title() {
  ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php
  	}
  	add_action( 'wp_head', 'theme_slug_render_title' );
  }
  ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <style>
    .wf-loading h1, .wf-loading h1, .wf-loading h2, .wf-loading h3, .wf-loading h4, .wf-loading h5, .wf-loading h6, .wf-loading p, .wf-loading li, .wf-loading span, .wf-loading blockquote, .wf-loading a {
      visibility: hidden;
    }
    .wf-active h1, .wf-active h1, .wf-active h2, .wf-active h3, .wf-active h4, .wf-active h5, .wf-active h6, .wf-active p, .wf-active li, .wf-active span, .wf-active blockquote, .wf-active a {
      visibility: visible;
    }
  </style>
  <script>
    (function(d) {
      var config = {
        kitId: 'spi2sxt',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
<?php wp_head(); ?>
</head>
<?php 

?>
<body <?php schema_type(); ?> <?php body_class(); ?>>
  
  <?php require get_template_directory() . '/inc/svg.php'; ?>
  
  <a class="skip-link sr-only" href="#main"><?php esc_html_e( 'Skip to content', 'readily' ); ?></a>
  
  <div class="wrapper">
  
  	<header class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
          	
      <nav itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar navbar-fixed-top navbar-default main-navigation" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
       			<?php
        			if ( is_front_page() && is_home() ) : ?>
        				<h1 class="site-title">
                  <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
                    <svg itemprop="logo" width='122' height='40' class="logo">
                      <use xlink:href="#site-logo" />
                    </svg>
                  </a>
          		  </h1>
        			<?php else : ?>
        				<p class="site-title">
                  <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
                    <svg itemprop="logo" width='122' height='40' class="logo">
                      <use xlink:href="#site-logo" />
                    </svg>
                  </a>
          		  </p>
        			<?php endif; ?>
          </div>
      
         <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navbar-collapse', 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => 'primary-nav', 'walker' => new Bootstrap_Menu() ) ); ?>
        </div><!-- /.container-fluid -->
      </nav>

  	</header>