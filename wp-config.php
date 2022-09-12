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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chalets-caviar-1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k JiR3u~lFu>jn8*lX[@Z4aSsoTo.V@&}@]j,f6%Q<vCwe5gv:w!Ec]oVstU%?x:' );
define( 'SECURE_AUTH_KEY',  'P<j^ZaFz9@X_ZrLbvFL;V-^<E}YUb@Mu0[3[mcwUy<A[Q.4A${SH4pCwcNDd`([s' );
define( 'LOGGED_IN_KEY',    '50bVE(tx7W#&% Ctf;;@A[3,vm_u:zmthj+GZN]i3bo!1|HQp(m;.Q+g$id^!qC`' );
define( 'NONCE_KEY',        '#g%yC!`_3]/k6yIXX`F`L9gXU0dS}q6uP)v7IEm[}|C7c3YcZs1k;|FO^$N&o$^*' );
define( 'AUTH_SALT',        'b|2>,3`(vtA?(tUqJ{ UDMc2sM)e]Si]Bz <SSub<(ypNqpb=c#ui8 J ~h/uyW}' );
define( 'SECURE_AUTH_SALT', '2pAG6Z1OJ`/Hc/+.}THS9+u3^ST3Q~uEJr3yT-%k_.Mp(*A|kq+_0W#_+kX@%YJ!' );
define( 'LOGGED_IN_SALT',   'Q_TGSG{Xe|qdBR|,qje6y6`nuf|o-)#<h|WK[~y7kT8hwJ(LL<8zb=!ElUqaVs.8' );
define( 'NONCE_SALT',       '/,XE-SSm1OZdDmy)Dqb!!O!e6K~phPmW5BTc<TcNC+G`;[dR}~D{r@`x%@yTQ*%[' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
