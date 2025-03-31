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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

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
define( 'AUTH_KEY',         'mT>9(d*D4)r6<1;&EZ3YF5PT]ts5yha4_8%KD.jY QEgv<(w+l^2aVIU)D2glR#P' );
define( 'SECURE_AUTH_KEY',  '(>+)mvKfChRq*/jILwUzp0b2Uhp{usmG|L&iZv$`Y!aFDb}YW%t]HIy?{P|HO>,3' );
define( 'LOGGED_IN_KEY',    'zm=Oif~oA{zr@F{%_Mxsn-9a#u fCU-?A4ixx@:pxr# [DWgLlRO)4Buj~|h1W6C' );
define( 'NONCE_KEY',        ':!&FH(ZF/a)!(usT>ecC!J#{ c6(=Z)pPrU%{oEzupgS(t=9?;gH>(di%>s.RNgj' );
define( 'AUTH_SALT',        'a8?Bz/Mpd:;vH%)FB=edk(+f*^B-JJ4!bOR^>fyMY]o5_2K.*B`jaNn ks4dEndG' );
define( 'SECURE_AUTH_SALT', 'Dk~JqEB_FIp/M9O|lx&^>H?{goZJ[s&b*3OYFN9GKU.(Cq?WUW&/^{-W$.SlF_!0' );
define( 'LOGGED_IN_SALT',   '0W(TR|?#s}bCK|PVRy{Pe3;+E)hv(q58HQ[F *7n%)}YZ(do;!TINF#@)p.4~cC(' );
define( 'NONCE_SALT',       'RC)rDix(JiL:0Ns]{WIbQXl:4_EWFUF,=mZatvXjG#JUXu.mvP4YF%~XP/{?*9/7' );

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
