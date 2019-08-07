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
define( 'DB_NAME', 'law' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%zN=+$.^TW:1*;u6<?HxUPHFk8@g]6EM6 +bb4dp ChW[%J_z(1#>8lh0}*R0V@>' );
define( 'SECURE_AUTH_KEY',  '`;xKnrb6Ft{C1mi}j-g+|OGCp-4Qtse8.Hu3zNtiz*N@qbI?fEusABS&=fGZn~@:' );
define( 'LOGGED_IN_KEY',    '0$cty4b{:Mqod-95GU+KYZ252J&)^~4Iif|)L#.20n3U7{Hr72:g;P77~[s]B!^B' );
define( 'NONCE_KEY',        'P_bg=EUJX`l]9_F8-xz%Q|$nsyV]ay?6(J%lf:T_^ GR>S;nf`/e}Q[rq7gaWCLt' );
define( 'AUTH_SALT',        'UQnND@K~~~cy UUe`y6{pVYqOKsxG c)=;#C#F#VDQsTZ|/QB#uRP=86kRgJ <Fy' );
define( 'SECURE_AUTH_SALT', 'w/5VN28/W?}2/A.zI>W)T&;rS[=lT?%3B*Dj&Iu0H7PAh#D9B@Krux&xpWR]6:YB' );
define( 'LOGGED_IN_SALT',   'GOz]W7z[/+J6/BY|g3rN9dY&@Q~1_7B.Osqww/7%uf>]O(>B</(f`/McjUdqn$3$' );
define( 'NONCE_SALT',       '3.xq)M@n``0Eqly+7QQ@1bbrUePIzrV<(LB?xu/imV%B6K3mw]LB5SXmbk=c,<~k' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
