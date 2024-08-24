<?php
$host = "tcc-mc.com";
$port = "28801";
$name = '1T2C-Server';
define('MQ_SERVER_ADDR', $host);
define('MQ_SERVER_PORT', $port);
define('MQ_TIMEOUT', 1);
require_once __DIR__.'/Data/Query.php';
require_once __DIR__.'/CloseTags.php';
if (($Info = $Query->GetInfo()) !== false) { //判断 Query 是否查询的到
    $status = "在线"; //服务器状态
    $motd = $Info['HostName']; //服务器 MOTD
    $host = $host; //服务器 IP 或域名
    $players_max = $Info['MaxPlayers']; //服务器可容纳最大玩家数
    $players_online = $Info['Players']; //服务器在线玩家数
    $version = $Info['Version']; //服务器兼容游戏版本
    $software = $Info['Software']; //服务器使用的软件或核心
    $agreement = "Query"; //使用的查询协议 (这边是用来显示查询方式的)
    $processed = $Timer; //查询耗时
    $platform = $Info['GameName']; //服务器平台 (MINECRAFT or MINECRAFTPE)
    $Players = $Query->GetPlayers(); //取得在线玩家列表
} else { //否则为脱机
    $status = "离线"; //服务器状态
    $host = $host; //服务器 IP 或域名
    $motd = "None"; //服务器 MOTD
    $players_max = "0"; //服务器可容纳最大玩家数
    $players_online = "0"; //服务器在线玩家数
    $version = "0.0.0"; //服务器兼容游戏版本
    $software = "None"; //服务器使用的软件或核心
    $agreement = "Query"; //使用的查询协议 (这边是用来显示查询方式的)
    $processed = "0"; //查询耗时
}


