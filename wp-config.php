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
define( 'DB_NAME', 'projetot_projeto' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'projetot_projetocc' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '%IliZjCt%!Ao' );

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
define( 'AUTH_KEY',         'zNd|{k@ndZDN?9YMwCPE}C<l@hJVhOhJIT.|R~>BAUTk`2qVf=+>I~W~hu0](5Z#' );
define( 'SECURE_AUTH_KEY',  'SX+I_b^A:}Q|}Y<SWtp-XG)_?-aext(ZacMBA{2xo,X-&B$GR4dYmSD{$DGbR_]{' );
define( 'LOGGED_IN_KEY',    'Wcc 4Yf@JzA>EiD]h*LU3Xs|{cDUt2u`T7{Pwr}h}i(#{!@tjB@L~JW3rzs5acj3' );
define( 'NONCE_KEY',        'ysF7<@S`yJCr|}>$msd}Ol?V_`k}/0R7qr6Bt|ej0kziv}JR1u@l<#4K[A4i:st^' );
define( 'AUTH_SALT',        '2}Z(A4wPz~Xw8Rx8%n)&nmKHJ~aZz8qWG3vM <SM89+]KZX10!:LG}uWDAy34{:M' );
define( 'SECURE_AUTH_SALT', '5^Cwt5>tRv[&).h^srwsY$!qO>&@rcqW*|*}mG(rm3;_&m2tVbvj;@RMxFDX@46K' );
define( 'LOGGED_IN_SALT',   'P<S mdco=exm1(TTRxzxc>9n#OOjij!5M_.x|Xi:uxT.y^~L6tX[!|+e!kH$@Pn>' );
define( 'NONCE_SALT',       '}/?TB-]p<wF8&(!e5(~0@K|r,RacMc5nck@pb,:rJY~S>kx2j`qvk8d1j=A1Ex7)' );

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
