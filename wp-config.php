<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'malauriebdd');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O{,5b-;zjE+Pu*?sW)x,MfFhU#Ijp_Xh;Hla:;bh<2GL]l|x]7MM:S{)+Jv%0Ou?');
define('SECURE_AUTH_KEY',  '/6nX;z<R#ids5|&o}tXnqUBZS{`z|F`0li[Fqs;&Zs?rP,MEEvwu_H2G)H]T6%1W');
define('LOGGED_IN_KEY',    'Pn*AK15GfpEo=:W3|.XRh0:R^uu#T-:ymve|X.W-YQPmt#D(1%p/-Lt>Oz>3oT}.');
define('NONCE_KEY',        'm<g3Jw)-9D=vMqOi|]WmI{QEvh_fZic7IzU(/Rye~<pq*~ya$?Ycnb$O+KuD+ qx');
define('AUTH_SALT',        'dG3:S}S0|@Xxg^7GUpU[e|7|#O:xZsg}8[+02&-|K&fj2u!tdpRyno]|PrAH|Y|-');
define('SECURE_AUTH_SALT', 'qy@t[c w/7qk]o(u-(81+Ou6R#Y}X2c?aU9`=|`aRUh{{|XU^p/]7u8}~pRN=e(X');
define('LOGGED_IN_SALT',   'j#|dUFzhJ^PhWp)x/u*oNs d6Ht0G2!}+0H#onVPjvuvdo#4~u,U:z+;1ybBxs5+');
define('NONCE_SALT',       '3razXXaz)|!+yMM|8t2Oa$ngwyjN8QpIvM?[5D|pgcloU6 |.-qA6nNVH6~l7tOW');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');