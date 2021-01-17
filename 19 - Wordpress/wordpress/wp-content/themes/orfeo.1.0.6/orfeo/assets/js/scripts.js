/**
 * Main customize js file
 *
 * @package orfeo
 */

( function( $ ) {
    // Pricing Section
    wp.customize(
        'accent_color', function( value ) {
            value.bind(
                function( newval ) {
                    /* Priicng section live refresh */
                    $( '.hestia-pricing .hestia-table-one .card-pricing .category' ).css( 'color',  newval );
                    $( '.hestia-pricing .hestia-table-two .card-pricing' ).css( 'background-color', newval );
                    $( '.hestia-pricing .hestia-table-two .card-pricing .card-title small' ).css( 'color', '#fff' );
                    $( '.hestia-pricing .hestia-table-two .card-pricing .btn.btn-primary' ).css( 'background-color', '#fff' );
                    $( '.hestia-pricing .hestia-table-two .card-pricing .btn.btn-primary:not(.no-js-color)' ).addClass('no-js-color');

                    /* Contact us section, contact form live refresh */
                    $( '.contactus .card .header-primary' ).removeClass('header-primary');
                }
            );
        }
    );
} )( jQuery );