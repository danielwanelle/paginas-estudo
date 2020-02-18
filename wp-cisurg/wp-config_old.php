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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp-cisurg' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'TdvlaC51' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'u[*|(R>i;87P3GE2Pj7dd-c@AE37(V:@nKX:$VgGov~w4cFXH1$Pphb#?!HHv]zE' );
define( 'SECURE_AUTH_KEY',  '#qy#3Y0dlOUImv%i9}UX-]Dj^qBZ:*g%Qbc)GSUw,HRbFe(>ud `9rq2T-CX(5N9' );
define( 'LOGGED_IN_KEY',    'F&0%Djr<?0@d|{t=??<@vSY4VCQo>Rb-#R<6mr%6RGbZ=hoy<][w}x*Jv7%Ab.qU' );
define( 'NONCE_KEY',        's&p juU/v/#67M^!8|#A[kS/Fv;G$Ln9c)VFH_?hvxCv)0XZ3qIey{u]%Y^PmGx*' );
define( 'AUTH_SALT',        '5W3Fg8Iz[?fwxwC*k*&&<Q0[})o5T|L8=[e:TzPwSN[v3T}u8(vlq&olP~liLzNE' );
define( 'SECURE_AUTH_SALT', 'Zi^CDX1L~]v<Z-OoS; BKIJn& yd$^gY>MV,1H%moC YU3ISt5k[SDXFm1=olRPU' );
define( 'LOGGED_IN_SALT',   'X8QvGBYb8t&xWwN7onT+SXm9 9%Q7L1J,?zV~Eas_/E.!v* dJ%,.N=L&7A8rX6)' );
define( 'NONCE_SALT',       'NlnCk}J3VM?)oxrJrpwLu{F9Xnp}AqBA +WX5:`-(dk0fgP2(b@N32V+Nr`A{(}x' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

