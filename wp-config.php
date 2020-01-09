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
define( 'DB_NAME', 'dfgnbv3_db' );

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
define( 'AUTH_KEY',         'IkfUSc..ha8SCpUnsigliv(+_]yhRDVcdkZ(Z2l}Z|vZ[+ d}K[iQDZQ O9szBS@' );
define( 'SECURE_AUTH_KEY',  'R.rn&iGZJmhX&W+7A%{?AxI8Ek9@(xT<DLW]Qy[nBH}2!>(vyC>gVq`1MFKOq#&C' );
define( 'LOGGED_IN_KEY',    'bO]Drt+orR*vj>KJ9^gU3?8y~0sc`3[UzdtT01`nPjfD+baifHIC0r|Y*a]%HA0x' );
define( 'NONCE_KEY',        'qw^~ssEXc,O):!N([V0$PHe$|n3l^6WH/:c$ZJ4ni^x6E$gL)F}oh:[+L)3eA?ii' );
define( 'AUTH_SALT',        'O  G7-=jO#GQx@7Kz6k4[T74?/=^$P#tkGzcMgyVHCZACqPcS&z/eu*yLd7#n)nA' );
define( 'SECURE_AUTH_SALT', '01ND2#FTR3Zy5?k+k6w0@0(OU9v2ND7lAfuZMk$W6Qp6c(@zGos{jnb,po^FsHby' );
define( 'LOGGED_IN_SALT',   'K/:HmhkBh9C]h,j8OqGOg#8Qcm&q?m5%Z/7g)2AEmKb5`[+,91jY:H]S,TWU>%$e' );
define( 'NONCE_SALT',       'd5K23vB)7rot}O:<_eyq]Mr[MnZ%Nz:o-pw@mk^R+hxJM~1ZcmJ)&8flB1GqbxsE' );

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
