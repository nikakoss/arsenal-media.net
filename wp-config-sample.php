<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'amblog');

/** Имя пользователя MySQL */
define('DB_USER', 'nikakoss');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'tlRbnZ');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NV-TUB(}z&WYZg{QKuOD{CR}I#z1JXP_qy_cIR.STni<uqgY%=rs2sfs?$Z0@<f-');
define('SECURE_AUTH_KEY',  'I7r &bju#I(nvS_lR>at|,_,#}!Ob?~;GHxLw4`-uW2sN` tLUP#Hf/.ZNNe+X$o');
define('LOGGED_IN_KEY',    'JkC)QVtEo8eK@:vHy(w;hSzJ+uKcLm6w=N@MN:=e_$J$CbN.Y$++(@-PKOxF(b39');
define('NONCE_KEY',        'ef%g[`.*Hf4H9;/Mc^L[vU]T|nymhZCafRwsX!e>29FxwNIu}h0aZ,hgq|53d|iB');
define('AUTH_SALT',        '.p&M[%N+Tm-l=?sk;If-:9/ Rf/u;0TH@mJr77Q&eDYzBzV)lay%<`#14}E0*KXm');
define('SECURE_AUTH_SALT', 'fI|Js>^|I~YmD*Wjt[y^%?7^[S#ID45Z}Pg]/oHO?`sINQA}6Ldao:qY`wN#S))f');
define('LOGGED_IN_SALT',   ';UZhbEg`ENt*M11oN`Z,YS_en6,|$/)&@0y4p}P>|(0~@?]C<e!.!]LfSZUgEJ$e');
define('NONCE_SALT',       '+yQOH.H}!8r-j 1`UpnZjlQJ{KYi])jNu-zDxBzq^uLJ]t.sz-(89i-pTw}S/{8G');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
