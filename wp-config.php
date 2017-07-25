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
define('DB_NAME', 'okschool');

/** Имя пользователя MySQL */
define('DB_USER', 'okschool');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'GIEJoIvoSJEBk69c');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-d(Xt]! MBlfx.W/w94wI;p=6ga;|W#NO0yPRFSxI>`{^F~g%FL^el9E=BUr1wm%');
define('SECURE_AUTH_KEY',  '.I[ JZpqp{zP[_Ih;r?!.GC~!MuYKH68^z4?Mz2M_3?fz%:!ndEt3?~,bfVBssor');
define('LOGGED_IN_KEY',    '=SPfVM#5:.r<c_T@:H_^%Ur2Fuqr2Xt9(%(_[IHcv5af!}BiHEn~3<ppT>Y?97l`');
define('NONCE_KEY',        'bKVLC;,6Zir(yT)GSt>iK+5Jz#ZAb@3vX9*%EDbu;GFNZ`:`vCdLJh@4C3Afc~^E');
define('AUTH_SALT',        'O? w%vzK=Ki_d/0J_#b[2Sph9;Lo+SYY5{SV1+Nx34![F0K}c_$E|JZ+.R?0P#!H');
define('SECURE_AUTH_SALT', 'H83R:y#wETN1}!:F33:QscXM.*&#0r0WCKo#D/INT$ #RTRW:#mu?zp4zOixh lM');
define('LOGGED_IN_SALT',   't4c$+g>hP.Lkb:F,y} }~P5V]n+k3Ltr4M(iy2]<PYW*VkN5eZ8)[HUzS/jDDr}F');
define('NONCE_SALT',       '!.&D +A=~8@$AOZ{psFgXD<);UGXKW82`r)zZpW*~_6s?@N#QAF-*ezQfrlT3ycG');

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
