<?php
/**
 * Loads all the files from the includes directory
 */
$files = glob( TEMPLATEPATH . '/includes/*.php' );
foreach ( $files as $file ) {
	require_once $file;
}

/**
 * Autoloads classes
 */
spl_autoload_register( function( $class ) {

	$file = get_template_directory() . '/class/' . str_replace('\\', '/', $class ) . '.php';

	if ( file_exists( $file ) )
		require_once $file;
});

?>
