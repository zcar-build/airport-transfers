<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i4965175_wp6');

/** MySQL database username */
define('DB_USER', 'i4965175_wp6');

/** MySQL database password */
define('DB_PASSWORD', 'E.SZoV1jybX8LGDn0Cj00');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zzFxADPINHbbsHtVrasDE5rdNSt4FUotyBvzDY8S6TerHeCAZkE1riSELOnZDcUl');
define('SECURE_AUTH_KEY',  'PcOuw9eLMAwolvlu9xrbwzF6t19nqYBIQPQeeHIarJUAeupXfOH0qf7oTGJTQ2gc');
define('LOGGED_IN_KEY',    'S6GtMk9mrT3qjq5u33Jjn7p9YgHbr5XVBZtnm0XIcZF6WgTpupNkUXgFtFi7KlYa');
define('NONCE_KEY',        'wxAUBA1XOTpUYLy1ke38WgIqVlTP5qOdUMcqkskDyVnENje0KDG7gT40awofSRRE');
define('AUTH_SALT',        'JCjNNu3OHZPRVHyMHYIt72BtXFVa6oXSBpDFzB8ptVbbZ4cFXjOGk5MuWhxUyWPv');
define('SECURE_AUTH_SALT', 'U1T29CY0smQIGjqbfQ3MoCH8VxfNQcZ3NV8sXkuKkWz1s7dZibo8nJ0De7O0s9uW');
define('LOGGED_IN_SALT',   'W3NK6IIVw5CpUiB9oYreqQESZusOKQSL1ilfklIdCPsX5IZIc4GEpxhCRRrSbXK9');
define('NONCE_SALT',       'tinvkc8TCDQYET1IFyvvQDZQZ2GPhwtcLt6pPCwPefTpmPMg6LoAE3dBM4HGcfgR');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/wp/';
define('DOMAIN_CURRENT_SITE', 'chicagobusrentals.com');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
