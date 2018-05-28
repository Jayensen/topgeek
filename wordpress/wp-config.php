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
define('DB_NAME', 'wp_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<2aa!IA%:ed($:$vQ;?0leN$VB_^T1,~aa<PVN6:CLU:H%o;N+%EaWEXylv-4_6q');
define('SECURE_AUTH_KEY',  'pI 3DHOC@+1):E>8oWe~eN #XDh/_ub1&dNbG&CNtUL(<6U:&d1#k.</A]tU]3IK');
define('LOGGED_IN_KEY',    'h~&0@bxUN2%bFLa{vhp_+.<xvs54{NEYIe`m$YY*jn0Iz.ijq3LzT:|$5z0zSNoj');
define('NONCE_KEY',        '<b:J|8!Q:oplZ5,wGaX=,W oTYF|#/dUJNZA:@Ro]1OptQ:{tI[R&|8)C2N16Jv[');
define('AUTH_SALT',        ',tv%<oLzGR$(3yblbmz#YiaIKR dd!U|=^z]?AWE{(S|#%/F4yne_k`W[*G@s %N');
define('SECURE_AUTH_SALT', '?xV*6@X0i&,90*dzDgf9D|7E[+|H2OGwmt/(HAX%DP6+CLx L-6XNlk3oQ`V_aLg');
define('LOGGED_IN_SALT',   '$/it1F}2CRjG4Kjxx`j|eP|2G))Gn1) (q@NU686Da?>pS,^mcLltn.>hW(c>Bd0');
define('NONCE_SALT',       '[LBA^z(Q1[?.=eO#3c+5Rz=x*(snuCVEWA6uFgfhC3Hd#U%[Lfj|BKmrW_0E]c^r');
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