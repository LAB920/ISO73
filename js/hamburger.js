$( function() {
    $( "#hamburger-button" ).on( "click", function() {
        $(this).toggleClass("is-active");
        $("#menu-bar").toggleClass("open");
        $("#menu-list").toggleClass("menu-visible");
    });
} );