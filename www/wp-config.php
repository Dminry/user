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
define('DB_NAME', 'user4');

/** Имя пользователя MySQL */
define('DB_USER', 'user4');

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
define('AUTH_KEY',         '&gL)fV3tXLJGL|Rb`Mur>Pxgi9-/5G^~1[s?;)h[xj6?H^g]p3M)dS&yI5Y2&EKQ');
define('SECURE_AUTH_KEY',  'Rk@N)+9=FaKqJHya1x8AIFZHU$U?a}qW&<yTh[F$w<:y%]J$g,nC!|$Y/VK-9>6n');
define('LOGGED_IN_KEY',    'A}_APNB#Z@R@_`-!#JeKVgbM=D{T:B$-hp=1QP$n1pevbO:IiDjHv*#bbA%&xbW9');
define('NONCE_KEY',        '5xl&jqmZ8XU).|JbN*e=N;]x%m]tVse+/cCt)mQqlEERH!/:>[ghZcaY@U5*/3A7');
define('AUTH_SALT',        's~X[mco,J/do!b2dO7vW35g8IO-ub)F-m+pR=^H+-KG9dz-Pu#NYhe(sC+c}4ykI');
define('SECURE_AUTH_SALT', 'EWl/we+_<4D:YBsRJ]sGJ?qdl({c+G%uP&joN5;-S3g3J|]G@j^.U~IhJ?,R*Dds');
define('LOGGED_IN_SALT',   ' *P+NX_?[5ND=UTOV,7=/7jOu5pV-v.:k5X!)J-$G&E7B|u/$QB!@1+H*nv#nB+K');
define('NONCE_SALT',       '4=(7/E^|-mzX*oh k_} `NS>Pd)&#_8|Y+;]Jg9HY|+z!mu#u$u5MAT_OP#OQkQU');

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
