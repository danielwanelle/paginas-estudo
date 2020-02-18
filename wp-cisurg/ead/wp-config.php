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
define( 'DB_NAME', 'eadcisurg' );

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
define( 'AUTH_KEY',         'G7}iL/xZZYl%dn Y[9hjn6EUZLlb;:%A%Cb)3 eo-{qu$aIkF0ZGt~J/81>q($QR' );
define( 'SECURE_AUTH_KEY',  ' &>yJwFmY~ideghKG.p5uZyh`3#hL<1(ie/]8tH+wApa?RTD=c[@bQ]{D5+Y%VS9' );
define( 'LOGGED_IN_KEY',    ']n7J$@MjD]]v/G;gC>KQzoip~H+D~%_B:Gai2&v5}@+PI$YLCR9=!(f&|h&z^;ey' );
define( 'NONCE_KEY',        'PomcH6(l~3/A1.jwib(y3JT]uzMhb@k.IWe~q=Bl=n98mv!+y7o>(R6s(/UJ,)d ' );
define( 'AUTH_SALT',        'FYx(5aoH<wVgLY{1_GLLDD{xW/v^o#w@}~oVc5S(.spmS%Qop#J)Ww^|A96LW2O:' );
define( 'SECURE_AUTH_SALT', 'm#&6@pB>HLAp (&ob?v[*(g.ok//fBEk:j}4}%mZiJP[S#PH!a<[Annt2eG`N2k&' );
define( 'LOGGED_IN_SALT',   'X,>lWaP6V7tgj;,b/# 6<v& %%qck@z~<h]{0ls6dtnkAVqM@@$ahgfr]z2~YcJ=' );
define( 'NONCE_SALT',       'bMzN?4 f{Nw+5Nq?IlLOa4wXJ*6/.#{Xhk2.XPny)|Td3y{u$Z]:YP=gy!pZ%GuM' );

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
define( 'FS_METHOD', 'direct' );
define( 'WP_MEMORY_LIMIT', '256M' );
