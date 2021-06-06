<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'terminplan' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'root' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', '' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         'Jlg8$9*r/hoi&{|4iE&6l[m94W|C_PdBsBa47r4jr8HB-EaM@ Jqtg?DV]{(IIqs' );
define( 'SECURE_AUTH_KEY',  'DBzW7rXon;ss`d^ymMm@1jBWNndC=8P3lb[0YgR)a??xsCd5MGnf/By89q8RN_V6' );
define( 'LOGGED_IN_KEY',    'S..uh^/OeT_~R{/+[t?@,$dN#|h(*VHe{0V5%-:s_4V_g;[#S[#wnjL?~U oIEzd' );
define( 'NONCE_KEY',        'H4w~9/Q?8rak.cl-Z><zr/J4W^NXU3cukOK.gI*cw9:muLwZ(G)!8z+&{=b.2WeC' );
define( 'AUTH_SALT',        'c!mzuw(_C0Tcer+YQ~-Kj$?mrj/+@7!Qy|<?6Q}z{XTbgJtO3e/!50v~{Sck{-0{' );
define( 'SECURE_AUTH_SALT', '&K1W/uf@VAV:&/[:VD|Zh;+d~ZG2]1RwEBN&*)tV]&l,9i<x<PN3<5|Zk4bTn=F|' );
define( 'LOGGED_IN_SALT',   '~wGM~$/d:^/Z,A+[93a~XZKSq]>0Ff)/MicF~7HydVr![gl^>BA4X.u1Yq=<- ut' );
define( 'NONCE_SALT',       'Cu[Jcfm5}1pjQZ`v6%3<!WT1P=p*{%8r6_eF9kV1L=.<sAz tM4FJ7R-[VT#UQ0B' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
