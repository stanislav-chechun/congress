<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'congress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#1n@4i}~?~t+*T@C:Z#9YZ.>A0y8!8yzs CR8h|gJapt2>wq%sDB3)+? R~lK5Wg');
define('SECURE_AUTH_KEY',  '.vMp`/0#49hmR+D;S`Xxvi6IN9u)+[Cz+`>dpr1bh04o_phqAUbbvrHv:pdir(|k');
define('LOGGED_IN_KEY',    '+n34iWr~V0?SZbe$T5lXS.pEDE]t;J]`GHwpS@!@8>po3k<qyUj$1!a}y$5EmIM;');
define('NONCE_KEY',        '-ty^WU%/,;ebsyggm`k!I*v=6a3s88+aS#oyLB;DV<tC]Z=c#?JXr||S9.tMk)RG');
define('AUTH_SALT',        '{yXS@>sX>`WHp{mq4 zB2(8<NU~fE@XB-wA0~Cbrpl|3N-sCb{E]yxs;<AIp?4-M');
define('SECURE_AUTH_SALT', 'zk3g+%Zqn6XNy70t7ZcdLyr-T-C)q(FM$SPb#X?E8p. Rz*+P+Gm/p{WbYLeD+s,');
define('LOGGED_IN_SALT',   'GQhXGkC#aWh(L4Cm}3?:-2R_2!OLl32-*K+@}&InQ@zNS_/wz1![IVT=+3_VY7vm');
define('NONCE_SALT',       'U#V+?BiM+C*lDQvksq;L.l{QBhLP2li8R%+CJqS65UWwjUdF|J*nn]pfND&SZD)n');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
