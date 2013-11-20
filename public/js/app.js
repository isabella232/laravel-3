/**
 * This file is an example application setup ONLY. This shoudl be copied to js/app.js within your 
 * public directory, and then configured and extended to be used as necessary.
 *
 * @author Kirk Bushell
 * @date 27th March 2013
 */
var app = angular.module( 'application', [ 'shift' ] );

app.config( [ '$routeProvider', function( $routes ) {
	Router.init( $routes );
}]);

// Initialize
app.run( [ '$rootScope', function( $rootScope ) {
	
}]);
