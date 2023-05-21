//scroll general
$( window ).scroll( () => {
    if( $( window ).scrollTop() > 30 ){
        $( '.navigation' ).css( {"padding":".125rem .75rem"} ).fadeIn()
    }else{
        $( '.navigation' ).css( {"padding":".75rem 1.5625rem"} ).fadein()
    }
} )

// scroll link ancura
$( 'ul a[href^="#"]' ).on( 'click', function ( e ){
    e.preventDefault()
    var id = $( this ).attr( 'href' )
    targetOffset = $( id ).offset().top
    $( 'html, body' ).animate({
        scrollTop: targetOffset - 50
    }, 300)
} )