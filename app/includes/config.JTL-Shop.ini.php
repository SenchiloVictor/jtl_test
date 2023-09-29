<?php
define('PFAD_ROOT', '/var/www/html/');
define('URL_SHOP', 'http://cms-site.loc');
define('DB_HOST','mysql');
define('DB_NAME','cms_shop');
define('DB_USER','root');
define('DB_PASS','root');

define('BLOWFISH_KEY', '78baf74632ac2acd6fce90a20c6fa7');

define('EVO_COMPATIBILITY', false);

//enables printing of warnings/infos/errors for the shop frontend
define('SHOP_LOG_LEVEL', E_ALL);
//enables printing of warnings/infos/errors for the dbeS sync
define('SYNC_LOG_LEVEL', E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
//enables printing of warnings/infos/errors for the admin backend
define('ADMIN_LOG_LEVEL', E_ALL);
//enables printing of warnings/infos/errors for the smarty templates
define('SMARTY_LOG_LEVEL', E_ALL);
//excplicitly show/hide errors
ini_set('display_errors', 0);
