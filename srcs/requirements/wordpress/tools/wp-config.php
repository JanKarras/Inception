<?php

define( 'DB_NAME', 'db1' );

define( 'DB_USER', 'user' );

define( 'DB_PASSWORD', 'pwd' );

define( 'DB_HOST', 'mariadb' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

define( 'AUTH_KEY',         '):Uw9 :|7$m3yy=c^IM%d8}zG6yXY%25SDUyr.r#GcDP)[b25Yn$sDLNwR~I=kwq' );
define( 'SECURE_AUTH_KEY',  'lBWxAzhu=StQ(s-[t_D8yH8_`0NiM~d[m q<{Hri]n#UM3J;@x[ne;,k<~cN`~%,' );
define( 'LOGGED_IN_KEY',    ' /e+%ecWs`>hA<s`|+7rmujt>3MA}GD*n=D7W%$8h*Xc!jP?hn+fw0#;;g{Ywl@k' );
define( 'NONCE_KEY',        ' -cX{xQc|GjD$=kXd,|lUX5)*oT)ru3^px-iU{q;`1If22EqIwA0/lPIIbpbtB=C' );
define( 'AUTH_SALT',        'U9LX s1@q6$[*VV,MUhL7tS@;I9t_u*uDQIfZdG.ei1Amy$*.RI_TSTz#y=X.>Wq' );
define( 'SECURE_AUTH_SALT', '0<MR&l4v=cZ)8Ke/#ip>2<Ed@ j<#pvLaOMc-jEFM9^tr`X*T2qDIB@)gg.0<e2V' );
define( 'LOGGED_IN_SALT',   'xSHh4B]r[~)h%n$f(dCt;mD}#q gy$<{ >qGgPS>XH*]jH>W<!10>H<_16l{(OdP' );
define( 'NONCE_SALT',       '7Ea$kvU|lkO8&X]b7^#K+w! lH2)SOelLiaYYX(Zz)Ebk_]-#m,J&aM<*JedFa| ' );

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );

define('WP_CACHE', true);

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
?>
