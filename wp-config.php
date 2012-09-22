<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ggeraldi');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'geraldi');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.~_u-DIBZ@o1I=}/[U&!vEow>(iQ-j3h;|++iQMP6ovR-tb1{J-dlVC|`{n66={0');
define('SECURE_AUTH_KEY',  '+_Gxbg<!St^6LAWbuvh@hW`@ ?i#HJS1!`~y7 bxp_+v(?/6=-pCpgRug+}S|`A<');
define('LOGGED_IN_KEY',    'loQrk:{Hjm|P3EbL|,2Zc-0mG%4a(=tm=MSb4nNj{*wcQvhz7T+d}v=f <S35(zb');
define('NONCE_KEY',        '+UFsFM1W]-+d|_E+qKT$-|tXEwul(U]G)b89Ac$-lK|j7U}+dlZDHSpRdFB?r+xL');
define('AUTH_SALT',        'UIUj|HQ9AsPs;TzlO+SX;NmgRv@p{WnQp{`Dit,QxE%3<iO/G3oQE3fhBxo&D7*;');
define('SECURE_AUTH_SALT', '9kiQXGEXN}D+(CP6ER})r`FlQgH2?b>Ev+VsZuoDJFe7;C0O^wJE*;r&]#tPyuGe');
define('LOGGED_IN_SALT',   '4n&8~hrJ3* oGmzY2NkT_Wb-8<.,Ob%B_0bVWO9I%;kSO+w4qqjv]tPsl)P9d~C]');
define('NONCE_SALT',       'wb,r][ZS6ru-a<$/#jiz_<6r:95!e7yP2+C>e$PFkp-#8~2CVcH_!Dq$HaXY`;:A');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'gg_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

