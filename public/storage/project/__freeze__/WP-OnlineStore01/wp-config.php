<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', ')DL8f3S6svAj^j+_>o5(-ca>Ve_bvz-A?ETKXh2l,(0|O4%FgJ`wUq]DDn/`gls5' );
define( 'SECURE_AUTH_KEY', '$4lkhD0hVRGbCLFnmAQ.RKQQ,aZ~q=&s8VJaY.VFK]Qorjlfn,ok#2zk]sxq|Li^' );
define( 'LOGGED_IN_KEY', 'oc25D`Ub._(9tc| [qlSBTM>DeEY!SDrKV(9f/hArkAny08wT,,?xA#as1[Buh!}' );
define( 'NONCE_KEY', '2J9E+<*?>BK{Pg[9?H^l>F_f8u+[yAoSxy/?Vq/&8y+xF|VhQBuW_+B5xr^OC#/K' );
define( 'AUTH_SALT', '[hQWJr1DP( =FW*+8*,#D4_1r{La&Ax+AwBMkavSn3Czny|&t~?Ls~+I3Yb&*04E' );
define( 'SECURE_AUTH_SALT', '97VF FkVSPw/*h^&{mH~-]oL|$:miXnI?4cC&<(~R9*|2@s}4>gz02hxcaoOTiyY' );
define( 'LOGGED_IN_SALT', 'U1W6)6+ayfDQW7S@SE*J=?8Y56WypPGlxyl&1.RVv[ZP.4$g.aLPDa,fHMHx5*yC' );
define( 'NONCE_SALT', '[_]zT (~,ywQOW1BQSZV6k *x^V9Q9u8{]^_gC,1ff:(VZjW6Ge]iTNip4,WKcam' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_OS01_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
