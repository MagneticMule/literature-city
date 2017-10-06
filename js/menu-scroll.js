/**
 *  menuScroll.js
 * 
 * Listens to the position of the div with id of #top-menu. 
 * 
 */

jQuery(window).scroll(function() {
  let scrollTop = jQuery(this).scrollTop();
  let topMenu = jQuery('#top-menu');
  let pageHeader = jQuery('body').find('#masthead');
  
  if (scrollTop >= pageHeader.height()) {
    jQuery(topMenu).toggleClass('fixed', true);
  } else {
    jQuery(topMenu).toggleClass('fixed', false);
  }
});


