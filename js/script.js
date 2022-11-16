var changeMax = false;
var changeMin = false;
$( document ).ready( function() {
	validaVideos();
	$( window ).resize( function( e ) {
		validaVideos();
	} );
} );
function validaVideos() {
	if ( $( window ).width() >= 768 && !changeMax ) {
		changeMax = true;
		changeMin = false;
		$( '#agenda video' ).attr( 'src', 'images/agenda.mp4' );
		$( '#agenda video' )[0].load();
		$( '#home video' ).attr( 'src', 'images/header.mp4' );
		$( '#home video' )[0].load();
		$( '#inspire .imageText img' ).attr( 'src', 'images/inspire.png' );
	} else if ( $( window ).width() < 768 && !changeMin ) {
		changeMax = false;
		changeMin = true;
		$( '#home video' ).attr( 'src', 'images/header-mobile.mp4' );
		$( '#home video' )[0].load();
		$( '#agenda video' ).attr( 'src', 'images/agenda-mobile.mp4' );
		$( '#agenda video' )[0].load();
		$( '#inspire .imageText img' ).attr( 'src', 'images/inspire-mobile.png' );
	}
}