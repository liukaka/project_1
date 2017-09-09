<?php
if (!session_id()) {
    ini_set('session.use_only_cookies', 'Off');
    ini_set('session.use_cookies', 'On');
    ini_set('session.use_trans_sid', 'Off');
    ini_set('session.cookie_httponly', 'On');


    if (isset($_COOKIE[session_name()]) && !preg_match('/^[a-zA-Z0-9,\-]{22,52}$/', $_COOKIE[session_name()])) {
        exit('Error: Invalid session ID!');
    }

    session_set_cookie_params(0, '/');
    session_start();
}