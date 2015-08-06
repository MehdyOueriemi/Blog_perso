<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Mon_blog');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':8a%/mmOZIMsl9+>^-EX]Kb}R29l,3(4),zhH+?~k2FAwZ8)=3sjW=se-3,@H&m9');
define('SECURE_AUTH_KEY',  'Od(pLzG}U2w+Dn-U^wmtTd<IPpZ]L/8WqDXZQh ^Fs+~wj+5!iBL:0C^x%tXQF=e');
define('LOGGED_IN_KEY',    'B:j<M1h*+MB!nDJ:6wHMY3QewzJ)isZ<6/(90dos`uA0#a#oBzPK}S.>rSb2dCix');
define('NONCE_KEY',        '$eU)MK1n|]tM+rt,vE)zvao{.yddUWVH~k&#CWbn4TLzCOf%(z[, y-Dtyx-i OY');
define('AUTH_SALT',        '/4*48n_-p[+p~76OJNx-OnN-1Zc=X_||6Tl8c[bxb`KeJwiRK<nKHqcc?NWf2s(Y');
define('SECURE_AUTH_SALT', 'jpsDZQdS`D~-M7>jhpEz/dgN(/=9;:ixs46=|k:]]tfeH^tfeRJ<(J^*l[][AQJe');
define('LOGGED_IN_SALT',   'tUc!s*`,V`$E|q{ irM|fxS% 87H<34Lmo*YO`C,kpx|.q5_Z)^a#@cxUljgrOn?');
define('NONCE_SALT',       '@{x_ WSKAXl=L{V+F*~m)_O@re}h&=TYKOCMf0>:U~K`mZ8Y {uc6pEJ64(&y?8c');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');