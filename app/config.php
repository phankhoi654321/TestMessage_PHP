<?php

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "sms");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

return $config = [
    'account_id' => 'AC4c11482e2b01a2c69bd1815deb1f4a38',
    'auth_token' => '71328dd539fcf8f8251090528f73aa41',
    'phone_number' => '+16467608328'

];