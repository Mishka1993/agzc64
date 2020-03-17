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
define( 'DB_NAME', 'agzs64' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '}`:J}2E)odD^FeJCVE<yZ]R;#<MGE@9{;]}*{=HXilAWMAc#>`Y hcn/x(=X/%)m' );
define( 'SECURE_AUTH_KEY',  'Zqzrs>VS*=2ZF2;,91yb*gmCBrUKr/k;u*{Ga_`gP@`0[<dF0LhXxzAjS{-N]^!o' );
define( 'LOGGED_IN_KEY',    'xp=x_7i&;6mG4)~{E-(MKOO:@/LE|3)*<?< iEaa6E~n{Z9LbW`6L1`qW$aT#WT<' );
define( 'NONCE_KEY',        '6d[VXMZMLIS2`FY/>w6JkAxy>Vzo}Sr R_$zo1ovDfgp3|$8_f9a. DF;S/.n6*N' );
define( 'AUTH_SALT',        'h8,Z-]HMx!dSN+:Xd)[Ft)cqeUGP`(mwTS{CS+S|UXme?/j^Y v~AALVv_7pS%jm' );
define( 'SECURE_AUTH_SALT', 'y{!i3j#sH4H>Ts|]v%:`@+KxTz[xpc+m.XKH2BIw_``I5rJ@/^9c-Us_?7}[[V80' );
define( 'LOGGED_IN_SALT',   'M:eUf|^Ys2T`E8Lc<l0QZSr8seU0Z)8oed~C/l~h-an@p~XB)R6ff)`r{i`cFhgR' );
define( 'NONCE_SALT',       '`{5W<p71RYxM=S=K5mbrSY1;%xTihml{1!!E)D}r*|lv,,*)Z@Wg^2A%R,.&S&Rd' );

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
