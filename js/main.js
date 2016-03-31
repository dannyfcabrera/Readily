// Main Script File

"use strict";

var velocity = require('velocity-animate');
// var velocityUI = require('../node_modules/velocity-animate/velocity.ui.js');
var ScrollMagic = require('scrollmagic');
var bootstrap = require('bootstrap-sass');

// Init

(function($) {
  

// Skip to content	
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();
// End Skip to content
	
})( jQuery );

// Document ready

jQuery(document).ready(function( $ ) {

var icon = String;
var iconClass = String;
var sceneContent = String;

// ScrollMagic Start

var scene = $('.story-board .scene');
var sceneOffset = String;

if ($(window).width() > 980) {
  sceneOffset = '-75px'
  $('.story-board .scene:nth-child(2n+1) .content').velocity({ translateX: '+=100' }, {duration: 0});
  $('.story-board .scene:nth-child(2n+2) .content').velocity({ translateX: '-=100' }, {duration: 0});
} else {
  sceneOffset = '-150px'
  $('.story-board .scene .content').velocity({ translateY: '+=100' }, {duration: 0});
}

$.each( scene, function() {
  
  var triggerItem = '#' + $(this).attr( "id" );
  var icon = $(this).find('svg');
  var iconClass = $(this).find('svg').attr( "class" );
  var sceneContent = $(this).find('.content');
  
  icon.velocity({ opacity: 0 }, {duration: 0});
  sceneContent.velocity({ opacity: 0 }, {duration: 0});
  
  
  
  function animateIcon() {
      
      switch(iconClass) {
          case "animation-scale":
              icon
              .velocity({ scale: 0.5}, {duration:0})
              .velocity({ scale: 1, opacity: 1 }, { });
              break;
          case "animation-rotate":
              icon
              .velocity({ rotateZ: '90deg'}, {duration:0})
              .velocity({ rotateZ: '0deg', opacity: 1 }, { });
              break;
          case "animation-move-up":
              icon
              .velocity({ translateY: '+50px'}, {duration: 0 })
              .velocity({ translateY: 0, opacity: 1 }, { });
              break;
          case "animation-move-right":
              icon
              .velocity({ translateX: '-50px'}, {duration: 0 })
              .velocity({ translateX: 0, opacity: 1 }, { });
              break;
          default: 
      } 
      
      /* setTimeout(function(){ icon.one("mouseleave", reverseIcon); }, 400); */
  }
  function reverseIcon() {
      icon
        .velocity("stop")
        .velocity("reverse", { easing: [250, 20], duration: 600 });
        /* setTimeout(function(){ icon.one("mouseenter", animateIcon); }, 600); */
  }

	// init controller
	var controller = new ScrollMagic.Controller();

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: triggerItem, offset: sceneOffset})
					.addTo(controller)
					.on("enter leave", function (e) {
						if (e.type == "enter") {
              animateIcon()
              sceneContent.velocity({ opacity: 1, translateX: 0 , translateY: 0}, { easing: [150, 20], duration: 600, delay: 200});
  				  } else {
    				  reverseIcon()
    				  sceneContent
    				  .velocity("stop")
    				  .velocity("reverse", { duration: 600 });
            }
					});
					
});


// ScrollMagic End
    
  
  // end ready
	
});