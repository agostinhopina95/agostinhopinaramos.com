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
define( 'AUTH_KEY', 'II->e8s`@fUh_vEb-7]uX<,gk $zC^)*jp7Y(>o<Og!/ZU(M%wbrCrV!qAcL eQ@' );
define( 'SECURE_AUTH_KEY', '<@ )Il#|eW?ceCh/4xPj`xcIQ5&y6213j_zw`v4*0;3Ix.3Bb|z@f6@#7L3^| 8J' );
define( 'LOGGED_IN_KEY', 'Q2slY?61(<mCf3$=K;{,ob0n#$/bIEim])5tFjcO4%tn@eaoxv.^G/^MvM._q6o3' );
define( 'NONCE_KEY', 'JLy@5DlL:aEXaaA*0=Sz1s4q=]<<5Ona1*$1HfA6qokgY+]f`xS[j, sZgIj[Tbu' );
define( 'AUTH_SALT', 'UzgU=!45Z;%dOe=PnGiPqG8nQY2Aq3v._q<sC?9:vA5BTJ5EOO14Ap<SH<he |AT' );
define( 'SECURE_AUTH_SALT', 'pTn1>BpvIBTu=Kp5.WzX/%WT+duE}xpXbCF}lyd|4#r|{^5^X{7VK+)|8JMUzX8T' );
define( 'LOGGED_IN_SALT', 'L?}BXH4H1tJ8;]9|oV:6>*O]anQ= DMr0^|+puA6,_g8?jJ1w<CI@NJQQOJsq}$Y' );
define( 'NONCE_SALT', 'w-~=$h9wx27O;|Z?P/Q5x=DH(6Cr_<6H62)8,mU__(swCa>gL~vdfx=W8 <puO@P' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_OS03_';

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
