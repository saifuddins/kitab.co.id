$(function() {
      var showcase = $("#showcase")

      showcase.Cloud9Carousel( {
        yOrigin: 42,
        yRadius: 40,
        itemClass: "card",
        buttonLeft: $(".nav.left"),
        buttonRight: $(".nav.right"),
        bringToFront: true,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      $('.nav').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('.nav.left').click()
            break

          /* right arrow */
          case 39:
            $('.nav.right').click()
        }
      } )
    })