<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'auto-rep' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'auto-rep-admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Hf`E+l~LYBa4BYH=A{;-Zpm53$X&Q+xn:Fr((]aNhMV99}#6?Ap.R642^trv..im' );
define( 'SECURE_AUTH_KEY',  'wX]7 J8b-P);kK9M:5_sT14kacKG|ilY(!6h_y557^sVsYEmpv(,PU*^v,3Z9IT/' );
define( 'LOGGED_IN_KEY',    'rg!mH?ZJ}bWE;]R[Ux;->#SJKd^UqoKi/@L^5E4u G3G9z,(ym$BiGBBnCQ&Z1Vi' );
define( 'NONCE_KEY',        'X~fQvXTh%K6}^6#<]LJEXiQG2E^_px oxsasoiZ.erMu8l:0HuOBT)g,a%uEC(@4' );
define( 'AUTH_SALT',        '%!Af</8w[iR Vmt1zGGp;8t4TeXHiPF?pj(sT@4a5ki)8Vf-6)j=OS6NJ>@Dr}?X' );
define( 'SECURE_AUTH_SALT', 'b]Pt*rx|`& 9L2pf*:,91J)t6CzSYJ7!r F*D]&4``~_H{rg?emE>06kC2.%z-qS' );
define( 'LOGGED_IN_SALT',   'l62We%)f~nPgI3h.4BsvX}{faA:i+kU8bww)MLjm4w/GEqTEC({j(GqtSj]jbLsj' );
define( 'NONCE_SALT',       'N?a2nPN|.m.JG`#njovK)`4>h?bhOi[!Bftnem&19sPC<m/9eUX=?:MvUF7l|.ji' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
