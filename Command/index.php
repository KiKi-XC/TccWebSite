<?php
/**
 * 使用PHP检测能否ping通IP或域名
 * @param type $address
 * @return boolean
 */
function pingAddress($address) {
    $status = -1;
    if (strcasecmp(PHP_OS, 'WINNT') === 0) {
        // Windows 服务器下
        $pingresult = exec("ping -n 1 {$address}", $outcome, $status);
    } elseif (strcasecmp(PHP_OS, 'Linux') === 0) {
        // Linux 服务器下
        $pingresult = exec("ping -c 1 {$address}", $outcome, $status);
    }
    if (0 == $status) {
        $status = true;
    } else {
        $status = false;
    }
    return $status;
}

// ping域名
var_dump(pingAddress('server.tcc-mc.com'));