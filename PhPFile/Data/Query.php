<?php
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

require_once dirname(dirname(__FILE__)).'/Data/MinecraftQuery.php';
require_once dirname(dirname(__FILE__)).'/Data/MinecraftQueryException.php';

$Timer = MicroTime(true);

$Query = new MinecraftQuery();

try {
    $Query->Connect(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);
} catch(MinecraftQueryException $e) {
    $Exception = $e;
}

$Timer = Number_Format(MicroTime(true) - $Timer, 4, '.', '');
?>
