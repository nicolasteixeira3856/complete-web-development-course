<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rRRt*/Y)YV7pqQ-l[T%20`thvSN<ncp>;}*37PE(5%<%(w;kvb^r]i>SL.2Sca)V' );
define( 'SECURE_AUTH_KEY',  '8<Q),G[O!i:lEJHSY2afdL7+Y=FC&<a6|pe#W{f#(4&1{yX+4pREKhvCquAt,3[*' );
define( 'LOGGED_IN_KEY',    'FzQ-7JB_B Vo)xfwt_rcT&eFgV]e;qftzTyu:n|EJ)6uV!vXll;0dG<%`LT}?ZAh' );
define( 'NONCE_KEY',        '=Y=)NsJXF(5z^(}lVNLwg?C^v%I25:tSTE:JGB`!q{JU9fNI4Ft30N)C8k|X:REO' );
define( 'AUTH_SALT',        '^$4QOwg77$xD!6;q])LCZ*s@_~@+Ngq9,b0bE8x}/K&Al`de u5tk}iA%%=4<a*&' );
define( 'SECURE_AUTH_SALT', '^_QGT(}+AN{pOrq*fgBupr~.;$(lhjTo,y 1R>F]eXR<ZuPIcCQXj;(9Hhq}-eCr' );
define( 'LOGGED_IN_SALT',   'rB(E`EGkp>-ARmsCBE*IDeu7g+yj`7U{dq g3o~h0ZFM7>6i4Q~V(c8Bz#C3)z6l' );
define( 'NONCE_SALT',       '_[5Wh?xpNJ16-N<1Q1B0/=,>$1#C->Z+o.(#.w hSL~>]g}f%=4f^M}[NIVb-kwx' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
