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
define('DB_NAME', 'ms');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'Z|hfQt*4)_?nRF~2cU]@D]-gW[.WqhVI7VLmy/J&z6-D+?? Ac~9^!zI^)#|6?Lv');
define('SECURE_AUTH_KEY',  'C).dLuM2tC]aU~IryT*0Klir}o-EZ a-h.]a=Wi[XL/ka~XQPcTRTu>k`_.6DS/e');
define('LOGGED_IN_KEY',    't2dnGFiojb4,,AW&lZ<Ja?8V-tr&>+>.9fv/x_yB|-d#*zwWTjzqn,F[*1c9laYo');
define('NONCE_KEY',        '1ilCtmCXN-5~>zB^X$]V<0wG;$N5XFovGjd1{a`LwkS]bVincQ/J8A;Rto%)jRKw');
define('AUTH_SALT',        '=hfn.*}Ny5UJnO7JG;z,Ba?Bd#T:&v{Qw!erzKtq0d*iL!Lvc}wbc0%R1u8YCoCl');
define('SECURE_AUTH_SALT', '~Nwg)3[iTlz%Fq%T3d(_ppEhn^)-(b!4!T!lp~vuj:Lwt-U00`$tzB4e(<?@Wfa~');
define('LOGGED_IN_SALT',   'b6RX$r6{E(]2LW24AHD42VHc;!C,u=?p~g_D{zs=jDw,5wLNu inG%?t?Q9+w|,[');
define('NONCE_SALT',       'Qj?fhpA`h|eMhhw`37BjPhgMu}f4^NQ>_0st12Ou{r#@$ [Fx[Usz6/=&=~0jYqa');

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
