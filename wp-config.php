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
define( 'DB_NAME', 'geraldic_ggeraldi' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/** localhost */
define('WP_HOME','http://localhost/ggeraldi');
define('WP_SITEURL','http://localhost/ggeraldi');
/** localhost */
/** atualizar em localhost */
define('FS_METHOD','direct');
/** atualizar em localhost */

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
define( 'AUTH_KEY',         'LSCeKb]xI -ODW-p_3;#6tH*o_}2T_I//!:DgU^8fMM>;.d0)wD,AVz/sx)L1qUr' );
define( 'SECURE_AUTH_KEY',  'krsq-NMV@6^iqo]A]p}olW<eh&5]$ATGS@zVqvKIU|]Tz*f(QdWk@mOu*G,MM81C' );
define( 'LOGGED_IN_KEY',    'l;@R6Gbi,gp5d^eC&u[y7mk6BhD-/@ lEtYc|qp/=SG>:!%WR >[m.^V[$~i{HO&' );
define( 'NONCE_KEY',        '0l-`u1(d`Tx(1G7SLZsKY!3k{,wS 5g=uUj(dZ)sCR(|32Fi-+q@FEbqWZQlmbFK' );
define( 'AUTH_SALT',        'f&wRKqKJqE{bv@YB_nIIM:DU4 H8I5Fe9d]NbYN 48Jyn,|ET%Dw&R0hncq.K_(Y' );
define( 'SECURE_AUTH_SALT', 'cr~2C~08<02x&lbf_el05^Ll-S[36)!Vd~qDzv^G9_hK+I1b_{E#GZG$Mbs-z8Tq' );
define( 'LOGGED_IN_SALT',   'tD@/EHKggzB|d1Xh7~V3{Z)ul%w{l&:g435c>QY+Dg~o*yH]hJj(Nh[HM``bRz;?' );
define( 'NONCE_SALT',       'DV?=s:R9l=n3$&=1]ojj<9ql.@EZF)M&`f+CQI>;Z1$<il4K^hJs7phy~Y0y&rUG' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'gg_';

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
