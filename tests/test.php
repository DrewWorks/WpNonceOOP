<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Nonces\WpNonce;

$action = 'save_record';
echo WpNonce::wpNonceAys($action);
