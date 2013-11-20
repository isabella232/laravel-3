<?php

/**
 * Default view composer for a new application. Customise this to however you see fit.
 *
 * @author Kirk Bushell
 * @date 23rd May 2013
 */

View::composer( 'shift::partials.head', function( $view ) {
    $custom = Asset::container( 'custom');

    $custom->add( 'app', 'js/app.js' );
});
