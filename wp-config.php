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
define( 'DB_NAME', 'safrayel' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'pancake' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'pancake.sql.123' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^l6IiTiU9]:)(W0>;miqo4g9{ty=qQfbeBJYf.|?f: ^ARO5a4ehJzw0u&CsW=Sp' );
define( 'SECURE_AUTH_KEY',  '`x:rK,RZQ4Wjxi!Y*.pFC}%5RE>>K7;D~>):^XCSfIPCv~i:r0<]_j8z_/X+6Ce0' );
define( 'LOGGED_IN_KEY',    'FclBlI8<Hh6D{oZ%gF3[[I_1PSufHeT-CJSgFk@gi8&uM~;n5yS+{,:}1)z=+)6b' );
define( 'NONCE_KEY',        'gueLc(qJS8|`cUqFg14Y8T4-d6n#3OU~Eo`7OUz3YbKh5pqFyO wwtfDQ9wMBW_d' );
define( 'AUTH_SALT',        '#kC#1F@oGIPcDd N]T7c[20dIbHIg%aLN}@^{G>51?ipRsQHH70D_Z?<8=U/q! +' );
define( 'SECURE_AUTH_SALT', '^LT$v0b8Dr)fp=58Qyc~(}ic2,1Z#5 `j!l/W;QM#bYcn9X;-07!yU^4[4i>6g1!' );
define( 'LOGGED_IN_SALT',   'C#BKD<q/OA,?h~d05y`@AjUg_4^R6R4.^RoN~];., `T9eSo6%9vW3daBPef/q%~' );
define( 'NONCE_SALT',       'S#xbj>ntNzN/c*$K%>4etnXG_y]eEQL }0MWK{OQpiPW0~42AuiP:IogS1)Oc8|*' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'sf_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
