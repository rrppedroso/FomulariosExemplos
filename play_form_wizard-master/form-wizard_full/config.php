<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 27/08/2018
 * Time: 15:20
 */

define('DATABASE', [
    'HOST' => 'localhost',
    'USER' => 'root',
    'PASS' => '',
    'NAME' => 'play_form_wizard'
]);

require_once __DIR__ . '/Source/Crud/Conn.php';
require_once __DIR__ . '/Source/Crud/Read.php';
require_once __DIR__ . '/Source/Crud/Create.php';