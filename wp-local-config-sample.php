<?php

// Database settings
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Site settings
define( 'WP_HOST', $_SERVER['HTTP_HOST'] );
define( 'WP_LOCAL_DEV', false );

// Debug settings
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
ini_set( 'display_errors', 0 );