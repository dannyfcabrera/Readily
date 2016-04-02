<?php
/**
 * Template part for displaying front page.
 *
 * @package Readily
 */

?>

<section class="jumbotron" role="banner">

  <?php if ( has_post_thumbnail() ) {
    echo '<div itemprop="primaryImageOfPage">';
    the_post_thumbnail();
    echo '</div>';
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
  
  <div id="intro" class="intro scene">
    <div class="graphic">
      <svg class="animation-scale" width="300" height="300">
        <use xlink:href="#icon-store" />
      </svg>
    </div>
    <div class="content">
      <h2>This is your business.</h2>
      <p>You provide quality services or products and great customer service.</p>
    </div>
  </div>
  
  <div id="scenario" class="scenario scene">
    <div class="graphic">
      <svg class="animation-rotate" width="300" height="300">
        <use xlink:href="#icon-map" />
      </svg>
    </div>
    <div class="content">
      <h2>These are potential customers.</h2>
      <p>They search the internet for services or products and get a list of results.</p>
    </div>
  </div>
  
  <div id="problem" class="problem scene">
    <div class="graphic">
      <svg class="animation-scale" width="300" height="300">
        <use xlink:href="#icon-simple-website" />
      </svg>
    </div>
    <div class="content">
      <h2>Now here is the issue.</h2>
      <p>If you don’t have a business website, the chances of customers finding your business become even slimmer. But you can change this.</p>
    </div>
  </div>
  
  <div id="solution" class="solution scene">
    <div class="graphic">
      <svg class="animation-move-up" width="300" height="300">
        <use xlink:href="#icon-magnet" />
      </svg>
    </div>
    <div class="content">
      <h2>There is a solution.</h2>
      <p>With years of experience in web development and graphic design, Readily can turn your site into a customer magnet.</p>
      <p>To learn more about our services, <a href="/readily/services/">click here</a>.</p>
    </div>
  </div>
  
  <div id="results" class="results scene">
    <div class="graphic">
      <svg class="animation-move-right" width="300" height="300">
        <use xlink:href="#icon-graph" />
      </svg>    </div>
    <div class="content">
      <h2>Results that matter.</h2>
      <p>We will track your page visits and data needed to convert visits into actual customers.</p>
    </div>
  </div>
  
</section>
  
  

