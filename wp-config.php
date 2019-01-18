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
define('DB_NAME', 'colibri');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'colibri');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Alpha755912!!Balde!!');

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
define('AUTH_KEY',         '.:QyjRP[.Yz1j:3v4.nYThde^{]t{Q^Q 7#V@o0C0!ZH?6{b,{Z]X-`d|^h4/=(Z');
define('SECURE_AUTH_KEY',  '<__#[Z!;+>jt_mWy1}6`m4m@mF|V+mCZ0K=)tyb8/?=QG8TA7-vh|>+1o,W@PM>j');
define('LOGGED_IN_KEY',    '/8GiQmovV3[+$Z,r:,]s8jPumPhxhuVc[3A*tTA7`tuM2&A:[C_pX=(8fU)1Z&Ot');
define('NONCE_KEY',        '@_2o;dBM@v^7j-eZB@k9YlMT?:8Kxk)0U*ManuY|^%ok I{D~@;VsR+*lM$;}Jz+');
define('AUTH_SALT',        '&P0mt9i?o]}]W@>dn<~qAkrr2W5-Uz*H-Qz4Bt3Duohdv@v%{ ,&Yj;dhgsxDe8y');
define('SECURE_AUTH_SALT', '<zb{i=Y[)Y`fUQowNXWwW/m[097*q0$aS]g$$)F$`{l$q`1d>KSj[~E=x?g( U]%');
define('LOGGED_IN_SALT',   '9Xf/hIQ>2fQ.v?`s/bbMs^/,wJ/pNMUr-`a+voBx<1ANs{)tpVioT]$<f!F=SDo`');
define('NONCE_SALT',       'UsLSLLO4yVm1:9FH>Kzzya%$ `W/7<&9=693p?~ ;FK_jOsIW;~BPZ:nDS=]ep=T');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
