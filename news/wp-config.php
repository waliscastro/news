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
define( 'DB_NAME', 'news' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'news' );

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
define( 'AUTH_KEY',         '-sc6)%WUvi2o)`@mm`w>pr)t7:h~y3+|k>^_ :HU]R$@KYn-WpE2Dy@}.n@IYhI6' );
define( 'SECURE_AUTH_KEY',  '^RwPq^jG($DK*3uz#Gy@g3,FVsVi*;hy;M:<V_X:X(C~%<2.+q&H){<UK>g,qn[Z' );
define( 'LOGGED_IN_KEY',    'V`Y*QVnJKuXzaaT$xN|2x5aWX*g$VTSXH($*%p&;N+E`zKQfWYmUsbPDu}GAVja/' );
define( 'NONCE_KEY',        '|Qz&#^Vzu[2i.)7UG|C2=WF[c(iSpXy$Wf#m.dLHc*|)/V?&7>,u%nP51dX`2vPJ' );
define( 'AUTH_SALT',        '<of*]dws}F;RCR&2SIgmT2 m@~j?/+byM?rwRkmH];&)1B>St+vAM%;nwc@Ip0c2' );
define( 'SECURE_AUTH_SALT', 'MvhLy8*&WT?%+j~aG:+i$y#$`5HJMKtbdI>-@+n#ywz_^$rqO@@-rsA@MG@:#U][' );
define( 'LOGGED_IN_SALT',   'u/CSnDqY}py^ljQBqG~ |.CbANMxe%7L)-GnLj&DYV{lvt,l!p>@6x6Y6I$ |2A$' );
define( 'NONCE_SALT',       'WkEEaZDm>PMiLoTa?G0|?@l<@1Y&-9l9pB@H8xZGIA<;#wIPbh2bl~Mq^PrOxA?5' );

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
