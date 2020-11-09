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
define( 'AUTH_KEY', 'c8X+I*w^0de,X``{NX;+SY9 nMBgin/!N%i$_qL6-<+.}?Bo-s4-%&*>W#]ws<wp' );
define( 'SECURE_AUTH_KEY', 'OU9BRJaxbk!rYP-*o^vP S/UQ_ vm9(E4cu|!Jv5aZJp&5$mP.rx)s[N[cQ8p<f-' );
define( 'LOGGED_IN_KEY', '~/U?o`C),AQk%{yYP8y;7_,_PvRz7@^uR{WG4D]U?`]x-eIH0Ze2tz;|[49kNkL?' );
define( 'NONCE_KEY', 'd_GRN+BdB S,GU>0-}+[=-@W]DTQbD=mQqv.D(^(pVl@2?Rf9W_8!:^#e~eK]&;@' );
define( 'AUTH_SALT', '_>Oy<;jFY[m0BwEjwjZe!mv,MA_E[E <,tE5,]Z&E*w;w(Ohj%P7WY7QnQ)gmA*x' );
define( 'SECURE_AUTH_SALT', '5fvC&I6,.R@1+7v8=.>;/*3qvAswyp+8(>V|r5&$^cjKyt%I0aOrzJ(>l*88~ae.' );
define( 'LOGGED_IN_SALT', '^A||%X[|hH[L;R/SO(y%E:(a,f> ,9KtzO IGUI<OruNAzP>h|7pJf]]P(NNxxzl' );
define( 'NONCE_SALT', 'YK^jOmff~-$:vuXNAH?28nKM>n8dnGvGo=: YV7&>~_4~$u{XXh61Wq8Y4a98LVA' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_OS02_';

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
