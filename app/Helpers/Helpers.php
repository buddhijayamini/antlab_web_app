<?php
// Helper function to generate the correct URL for public assets
define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'));

function public_asset($path) {
    return BASE_URL . '/public/' . ltrim($path, '/');
}
