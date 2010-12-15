/*** 
 Simple jQuery Slideshow Script
 Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
 ***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 )
        $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next() : $('#slideshow IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
                     $active.removeClass('active last-active');
                 });
}

//$(function() {
      // start the slideshow
      setInterval( "slideSwitch()", 3000 );
//  }
