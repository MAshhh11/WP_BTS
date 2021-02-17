<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', ''); 
define( 'COOKIE_DOMAIN', false );

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'monsite_11' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k5x2Xul4b:qFfrBw/($BPJvu &:1-!INNU&N%z8/O]B[A|E[1sygT#^gy5RWbAIL' );
define( 'SECURE_AUTH_KEY',  'qQa[<=ij7n3AEIOM)i6&{728w4>[kZ;~7v5Ql;Nb*xxt5&np_TL1.z,,K!2dkRSK' );
define( 'LOGGED_IN_KEY',    '&RPB |V:,7.wUFq$%/oT39j--&*eu)&d4Fqt@3k)2Sz)&Wr>y]E]}B<?X%1>{9_m' );
define( 'NONCE_KEY',        'uF#9KX)Z:V%PGdt4pOqd- |9X:K4oXs+r92lZI>iPQDpkmpe(Y=~_oV.r81ME6,(' );
define( 'AUTH_SALT',        '@@|9RdsUg3B@ibVWDhwM.-iI|G2=R|q5AfBK@sY)x^5o6X_D2QhZM,Xe^42%`KSm' );
define( 'SECURE_AUTH_SALT', '>kw6qftdZy{S`1eBDJJ)yoY)~;r<tDaM:fGPp72JBlH5ubj;VJ&YJ`Z.A5gI/9wO' );
define( 'LOGGED_IN_SALT',   'eq>_Yww& 6^!c5 o_@q!E_._HS<EoYVm|jop(1T8C?:Tz1#roVWxbdClD&8(6>t?' );
define( 'NONCE_SALT',       '$}LKk@@tXq,x)tjkDyKRpws,NJtns1w%N*z>_m-01F~Hg{EFG0ejRXQ o!iaiRRh' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_bts_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define( 'WP_HOME', 'http://localhost:8888/wordpress-start/' );
define( 'WP_SITEURL', 'http://localhost:8888/wordpress-start/' );

//if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

