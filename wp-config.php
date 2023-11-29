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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadaviagens' );

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
define( 'AUTH_KEY',         '[sqfvSeC.IekheiJ++,>Ua,t?R2-m&[2lSCc3 =9(7$#W}YNb6Tck88;EV;z$1Iy' );
define( 'SECURE_AUTH_KEY',  'm]pSXS[cN:9`E]]t5T(V:ar`n<a1AkJ1s:wI!9rHH.uu~w^{jkJ]_H[k.Gv~>)68' );
define( 'LOGGED_IN_KEY',    'aPvnp$NV*1>?7*2XnlP#P1jtmbml2A;MMPg.9~}UTC]~#p)V5c1+x<uFk,sso(_*' );
define( 'NONCE_KEY',        '.bx);%>uh$hzAOkT-3x[OH;7${}=}Dqna>+MQO?w}d6x?6tFRbi]4X#<uA>Z[7gJ' );
define( 'AUTH_SALT',        'h%;cd<3@~X$=4J4e@*UWwMR=Z;LZtIu!<t.DbV)B?cJS9H`*?:-B{{+8{9[m$Ow-' );
define( 'SECURE_AUTH_SALT', 'fbHNOMSCfV:MAXB)H,;uh&3UUR=C.qhqXAkzQO]un0p*>t[?R%`!&lyw9ICM j9:' );
define( 'LOGGED_IN_SALT',   'g5Df 3%Pq lpnZE=}9/1Rd,.UZgRHH_E*ITC:B=sH&;>EdsDEeOu`<]*/~5J,^R)' );
define( 'NONCE_SALT',       '(%lpD[r#0H=GD;($B=^<~tCfos;X5nvLbPzR:/(;v=mgo?A/[^L=k}$?a]7=8b)@' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
