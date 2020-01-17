$( function() {
    $( ".verwijder-mijn-foto" ).on( "click", function() {
        let photoiddata = $(this).data("id");
        let useriddata = $(this).data("user");

        if (window.confirm('Weet je zeker dat je deze foto wilt verwijderen?')) {
            
            // Pass data with Ajax to PHP script
            $.ajax({
                url: "inc/delete_photo.php",
                type: "POST",
                dataType: 'json',
                data: { photoid: JSON.stringify(photoiddata),
                        userid: JSON.stringify(useriddata)
                }
            });

            // Refresh page
            location.reload();
        }
    });
} );