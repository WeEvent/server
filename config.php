<?php
// DEBUG
$config['debug'] = false;						// Disable this in production

// MongoDB
$config['mongodb']['base'] = 'weevent';

// Autenticate
$config['auth']['token_name'] = 'X-APP-TOKEN';
$config['auth']['mysql_table'] = 'user';
$config['auth']['mysql_user'] = 'email';
$config['auth']['mysql_pass'] = 'password';
$config['auth']['mysql_token'] = 'token';
$config['auth']['mysql_expire'] = 'expire';
