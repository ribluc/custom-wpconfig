
# ----- Get the real IP at apache from nginx reverse proxy
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = $ips[0];
}


# ----- To use on PHP on Apache when using Nginx as reverse proxy
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] ==='https') {
    $_SERVER['HTTPS'] = 'on';
}


# ----- Disable Wordpress autoupdate
define('WP_AUTO_UPDATE_CORE', false);


# ----- Set Wordpress revisions to 5 (max)
define('WP_POST_REVISIONS', 5);


# ----- Empty trash after 15 days
define('EMPTY_TRASH_DAYS', 15);
