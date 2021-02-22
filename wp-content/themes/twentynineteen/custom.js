( function( $ ) {

    $( document ).ready( function() {

        $( document ).on( 'click', '.taxonomy-list', function () {
            // alert();
            var _this        = $( this ),
                contentObj   = _this.parents( '.main-shop' ).find( '.product-selected' ),
                taxonomyName = _this.attr( 'taxonomy-name' );
                parentID     = _this.attr( 'data-id' );
            $.ajax({
                type: 'POST',
                url: demojs.ajaxurl, 
                data: {
                    'action':'get_ajax_products',
                    'parentID': parentID,
                    'taxonomyName': taxonomyName,    
                },
                success:function( response ) {
                    contentObj.html( response );
                },
            });
        });

    } );

}( jQuery ) );