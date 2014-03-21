<?php
/**
 * Configuración básica de WordPress.
 *
 * Este fichero contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información
 * visite la página del Codex {@link http://codex.wordpress.org/Editing_wp-config.php Editando
 * wp-config.php}. Los ajustes de MySQL se los proporcionará su proveedor de alojamiento web.
 * 
 * Este fichero es usado por el script de creación de wp-config.php durante la
 * instalación. Usted no tiene que utilizarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores.  
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'webnucleo');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '123456');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8');

/** El tipo de cotejamiento de la base de datos. No lo modifique si tiene dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}H&9YU5ue :cxD^;t/_`=XW}gn8WAxVX1XCKp4n?9!bqLp*qw4S46YVx@v:CBicD');
define('SECURE_AUTH_KEY',  'r:m}72(>>,lL`uQf52jI^,-izw`C|zX*H{%w[8FFC+~vbK{xiwy>.K.bGLj=612G');
define('LOGGED_IN_KEY',    'T9,_p[(U Eu$Q2^4:pa.fn-A3fL$p>d8/u:.UkP(!Dcti^xlwv/6(laQ0ZG^eKC:');
define('NONCE_KEY',        '6K1/GczNN:YwQFDaoJjPOkH<aLwDwXZs(ApfjWcyzC#Nx*z[dt64Mpqy6{.H%*7[');
define('AUTH_SALT',        '7^|,`TJ62*l;?x)}43.JNG%WZ5$_!A.KjL2&M3cCeb7HvssFIP!E08|WK!lE>Y<[');
define('SECURE_AUTH_SALT', '&6g5;U5Tm!jd;W(ZpD|=(Uuf`Cg<J@`C:{9@ukfDo&@kM5q,o044!R:Wy$#4VsyG');
define('LOGGED_IN_SALT',   'A6)$QFuA86B;CpLv3(9`QfVFkB_8_95Xa#JPHN2A@:<_wJ`1c%-{0<P/xYYE%2[e');
define('NONCE_SALT',       '=D-_`vyWyrk]+Fs~FGw)i`}<A=?@G-]Nf6DhJj#:3|f6@d>$4gjMu2A^G(lwx!Dh');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress. 
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le 
 * da un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Localización del idioma de WordPress, por defecto en inglés.
 *
 * Cambie lo siguiente para localizar WordPress en su idioma. El correspondiente fichero MO
 * del idioma elegido debe encontrarse en wp-content/languages. Por ejemplo, instale 
 * es_PE.mo copiándolo en el directorio wp-content/languages y defina WPLANG como 'es_PE'
 * para traducir WordPress al español. 
 */
define ('WPLANG', 'es_PE');

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG 
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');