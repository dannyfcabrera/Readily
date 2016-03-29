<?php
/**
 * Template part for displaying front page.
 *
 * @package Readily
 */

?>

<section class="jumbotron" role="banner">

  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } 
  ?>
  <div class="headline">
    <h2 class="line-one">Don’t wait another minute.</h2>
    <h3 class="line-two">Be Readily.</h3>
  </div>
  
  <div class="scroll light-color">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle-thin fa-stack-2x"></i>
      <i class="fa fa-angle-down fa-stack-1x"></i>
    </span>
  </div>

</section>

<section class="story-board">
  
  <div class="intro scene">
    <div class="graphic">
      <img width="300" height="300" src="img/graphic.svg" alt="image name">
    </div>
    <div class="content">
      <h2>This is your business.</h2>
      <p>You provide quality services or products and great customer service.</p>
    </div>
  </div>
  
  <div class="scenario scene">
    <div class="graphic">
      <img width="300" height="300" src="img/graphic.svg" alt="image name">
    </div>
    <div class="content">
      <h2>These are potential customers.</h2>
      <p>They search for the internet for services or products they need and get a list of results.</p>
    </div>
  </div>
  
  <div class="problem scene">
    <div class="graphic">
      <img width="300" height="300" src="img/graphic.svg" alt="image name">
    </div>
    <div class="content">
      <h2>Now here is the issue.</h2>
      <p>Depending on the quality and content of your site, visitors make a decision of whether or not they want your services or products.</p>
      <p>If you don’t have a business website, the chances of customers finding your business become even slimmer. But you can change this.</p>
    </div>
  </div>
  
  <div class="solution scene">
    <div class="graphic">
      <img width="300" height="300" src="img/graphic.svg" alt="image name">
    </div>
    <div class="content">
      <h2>There is a solution.</h2>
      <p>With years of experience in web development and graphic design, Readily can turn your site into a customer magnet.</p>
      <p>We have so many services to offer, but you don’t need all of them.</p>
      <p>Readily tailors our services to meet your needs, that way you only pay for services that will benefit your particular business.</p>
      <p>To learn learn more about our services, <a href="/readily/services/">click here</a></p>
    </div>
  </div>
  
  <div class="results scene">
    <div class="graphic">
      <img width="300" height="300" src="img/graphic.svg" alt="image name">
    </div>
    <div class="content">
      <h2>Results are what we provide.</h2>
      <p>We will track your page visits and give you our professional feedback based on the data collected.</p>
      <p>Using this data, we can determine what changes need to be made to keep visitors of your site longer and turn visits into actual customers or clients.</p>
    </div>
  </div>
  
</section>
  
  

