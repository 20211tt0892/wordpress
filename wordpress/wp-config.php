<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'group4_wp' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H|@=oP?wK)K`pLSip:6bJ2%gqWpHfpM8]-R$E,lAS9ILG1 qY--+m:-$&O(`6/!|' );
define( 'SECURE_AUTH_KEY',  '1jV?yHn:UNV8hggZ7`vgLG}n:u,Ij=Tv`.59WBIW%- BWo*~^c6[yG7|]KgK`d9C' );
define( 'LOGGED_IN_KEY',    'KFTlv=wUDoztP2:4Qwl3E}K^1&OqFs0<56l[Lgd?y{sQ6rdE%xa9wx.mAd)zn-XS' );
define( 'NONCE_KEY',        './U!R(u+hr$7t%_]:192uNSVmkZTpz2Y[;$`GbEQk-C toUkcvlPWfD(x{AX*b:b' );
define( 'AUTH_SALT',        'AQdf{O,hs):[hoRD:7WX3j|Eq(uen`^A+F5NFiZi>i2>Oo(,|1m%xP{x:lyuK{TG' );
define( 'SECURE_AUTH_SALT', 'T-MsbpR(&LQ~TR8,JD(j /Hn&)T_LG]W6&Ex$oES==OriA|Lq*T{%7Z`vIXjM}Mp' );
define( 'LOGGED_IN_SALT',   '>^Rx2GRxBm)S/kj7kwdHrV&Cokt6Me|jJ?n{jYwj5;ifz2Zw*Ag9g,.~S@29$#+M' );
define( 'NONCE_SALT',       'V$gPi;0x)lQ|/Fe*=@M13I][=iw]Imp*tW<JO9]07]qGjI;Cn.>]A4!`|nb}BEL)' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
