<?php
//引入文件
//读取服务器时间
date_default_timezone_set('PRC');
$time = time();
$ServerTime=date("e-h时-i分-s秒",$time);
//判断浏览器
global $agent,$BrowserType,$BrowserText,$BrowserIE;
$agent = $_SERVER["HTTP_USER_AGENT"];
if(strpos($agent,'MSIE') !== false || strpos($agent,'rv:11.0')) {
    $BrowserType="Trident-IE11";
    $BrowserIE=true;
    $BrowserText="您的浏览器已过时,功能受到限制,请及时升级";}
else if(strpos($agent,'MSIE') !== false || strpos($agent,'rv:10.0')){
    $BrowserType="Trident-IE10";
    $BrowserIE=true;
    $BrowserText="您的浏览器已过时,功能受到限制,请及时升级";}
else if(strpos($agent,'MSIE') !== false || strpos($agent,'rv:9.0')){
    $BrowserType="Trident-IE9";
    $BrowserIE=true;
    $BrowserText="您的浏览器已过时,功能受到限制,请及时升级";}
else if(strpos($agent,'MSIE') !== false || strpos($agent,'rv:8.0')){
    $BrowserType="Trident-IE8";
    $BrowserIE=true;
    $BrowserText="您的浏览器已过时,功能受到限制,请及时升级";}
else if(strpos($agent,'Firefox') !== false){
    $BrowserType="Gecko-Firefox";
    $BrowserText="您的浏览器可以正常访问本站";}
else if(strpos($agent,'Chrome') !== false){
    $BrowserType="Chromium";
    $BrowserText="您的浏览器可以正常访问本站";}
else if(strpos($agent,'Opera') !== false){
    $BrowserType='Opera';
    $BrowserText="您的浏览器可以正常访问本站";}
else if(strpos($agent,'Safari') !== false){
    $BrowserType='Safari';
    $BrowserText="您的浏览器可以正常访问本站";}
else{
    $BrowserType='Un_know';
    $BrowserText="未知浏览器类型,有点高端呀";}
//查询IP状态
$address="server.tcc-mc.com";
$statuss = 30;
if (strcasecmp(PHP_OS, 'WINNT') === 0) {
    $pingresult = exec("ping -n 1 {$address}", $outcome, $statuss);}
elseif (strcasecmp(PHP_OS, 'Linux') === 0) {
    $pingresult = exec("ping -c 1 {$address}", $outcome, $statuss);}

if (0 == $statuss){$statuss = true;}
else{$statuss = false;}
//判断
global $Statuse,$StatuseText;
if ($statuss==true){
    $Statuse="正常";
    $StatuseText="若游戏服是关闭的,请留意群公告";
}elseif($statuss==false){
    $Statuse="超时";
    $StatuseText="服务器异常,大概率是被打了或者维护";
} else{
    $Statuse="???";
    $StatuseText="???";
}

if (!file_exists("count.txt")) {
    $one_file = fopen("count.txt", "w+"); //建立一个统计文本，如果不存在就创建
    fwrite("count.txt", "1");  //把数字1写入文本
    fclose("$one_file");
} else { //如果不是第一次访问直接读取内容，并+1,写入更新后再显示新的访客数
    $num = file_get_contents("count.txt");
    $num++;
    file_put_contents("count.txt", "$num");
    $newnum = file_get_contents("count.txt");
}

