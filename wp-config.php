<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp-01');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hJvv8{38UI/g{(+i^WPY=(X!W#X*zu8l8Qj2JCVz4x<b.3SiEj,mRj!D:uQTg2RV');
define('SECURE_AUTH_KEY',  'tCQMB0z_BjK7.W)J)6vq*uJjj|vxrf24gwc*bGu!?=p5mp{obE(#@Z< lbQ9;7eT');
define('LOGGED_IN_KEY',    'kna #u9,/T@,.Ynh=Xye)~=*)]>h.rcb9iO&4#6=%+?sixU5;7!G<<#I>x_t7P7b');
define('NONCE_KEY',        'QBnA?W uuUvuw?`lzu7=dMsjK7Wo8U_Z`B[d.PWFO4JB`#?Enjf3tONwzJls46r>');
define('AUTH_SALT',        '[4bX)=e~UYoZfYo^4_Zr?!8;vcsJcS_y@u/yj8=8,.ji1}NNR_q.f`yk-BBy&!Dh');
define('SECURE_AUTH_SALT', ' Z)x{HJh2:idn]qB:KF-ix |e/`blw-_g:LxVWGB}yO%i]lU:At)gw!gMl<#LHCw');
define('LOGGED_IN_SALT',   'HNMpsx~|,r-g7&Ck|0!B#624b+|p`jV(Ky@<Mj,{Wm]x!dWBt5&F;/HG0V>wNssZ');
define('NONCE_SALT',       'l`J5X8XjlyqtSM|)hPwJ9do5V[={5L7,3x5PVQi]MwRIgBop QgY6zf&j-%;/J$r');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
