<?php
  

if ( ! function_exists( 'schema_type' ) ) :
  function schema_type() {
    
    $ItemType = '';
    
    if (is_page('about')) {
      $ItemType = "itemscope itemtype='http://schema.org/AboutPage'";
    } else if (is_page('contact')) {
      $ItemType = "itemscope itemtype='http://schema.org/ContactPage'";
    } else if (is_home()) {
      $ItemType = "itemscope itemtype='http://schema.org/Blog'";
    } else if (is_archive()) {
      $ItemType = "itemscope itemtype='http://schema.org/CollectionPage'";
    } else if (is_single()) {
      $ItemType = "itemscope itemtype='http://schema.org/BlogPosting'";
    } else if (is_search()) {
      $ItemType = "itemscope itemtype='http://schema.org/SearchResultsPage'";
    } else {
      $ItemType = "itemscope itemtype='http://schema.org/WebPage'";
    }
    
    echo $ItemType;
    
  }
endif;