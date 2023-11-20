<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'motaphoto' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ws?d9c,+@XlOO:e$`BT)Z1kkKw6]w+fs>G_;Ie&oKQkh>lg?V2S)]C D#,(K5b7}' );
define( 'SECURE_AUTH_KEY',  'R(~RBF#DJa8Y|R<7|.X9x~E)n>q2KfQ^u>RR|UpPaD(1,hr^|J&&u+FigrY%S?:k' );
define( 'LOGGED_IN_KEY',    'fa.WMfdabpgkQj^=(Ej%@6iz%3g:`tqZ<o&p~n1f&3qO,pUl$],eABTO?3l}~XyB' );
define( 'NONCE_KEY',        '4xhyl9R)ZG #z^^i?B?K5;]fkhuh)PvaK17g/[(?pxqb*s9[qTH<#EWFv*#n:RZm' );
define( 'AUTH_SALT',        'U`n)k645!b@rbDjg({,0X=)r@o3H^zeSCN=o]B=|~9%J^V#8ha_-.5!Qg/+be9;r' );
define( 'SECURE_AUTH_SALT', '_~A:@#G,Q@_BF{78(Rr#-mhZ4g[ [9Ds!k@ho1%W4oI%rg$n ~iF.IeMNE&>wv)r' );
define( 'LOGGED_IN_SALT',   '3A9;8?ip.r=sZ1W-}IL;w]UFqh<_<%5J4Nvg5H{P@>0vjfoU^nC&pMCw4rb}+P.Z' );
define( 'NONCE_SALT',       '-o,VllwML<NY]m^@hPoJL)kL*~X;L*v@{h.l;@4)3ek3mKI&(avd;gO6Ms8z_&|z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
