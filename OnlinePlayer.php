<?php
require_once __DIR__.'/PhPFile/Data.php';
require_once __DIR__ . '/PhPFile/Mainp.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<!--头部标签部分 2024/2/9 By Tim-->
<head>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>1T2C Server - 在线玩家</title>
    <!-- SEO Meta-->
    <meta data-n-head="ssr" name="author" content="1T2C/Tcc">
    <meta data-n-head="ssr" name="keywords" content="tcc,1t2c,我的世界,服务器,java,正版,官方,纯净生存,冒险,生存,沙盒,联机,原版,多人联机,Folia,土豆服,优质土豆,在线玩家,TrustCareCommit,生存大佬,PVP大佬,tcc我的世界服务器,我的世界java服务器,我的世界正版服务器,我的世界多人联机,我的世界服务器,java我的世界服务器,">
    <meta data-n-head="ssr" name="description" content="Tcc在线玩家">
    <meta data-n-head="ssr" name="copyright" content="Tim">
    <meta data-n-head="ssr" name="robots" content="index,follow">
    <meta data-n-head="ssr" name="generator" content="PhpStorm">
    <meta data-n-head="ssr" name="revisit-after" content="1 days" >
    <!--Web Icon Tags-->
    <link data-n-head="ssr" rel="shortcut icon"  href="./Assets/Images/favicon.ico">
    <!--Link Style-->
    <link data-n-head="ssr" rel="stylesheet" href="./Assets/Css/bootstrap.min.css" />
    <link data-n-head="ssr" rel="stylesheet" href="./Assets/Css/main.css" />
    <style>
        .section-index{
            margin-top: 170px;
            margin-bottom: 50px;
            text-align: center;
        }
        #section-index p{
            font-size: 50px;
        }
        .section-index h1{
            font-size: 40px;
        }
        .section-index img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <!--站点页头部分 2024/2/9 By Tim-->
    <header class="WebPageHeader WebPageHeader-area sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="WebPageHeader-navbar WebPageHeader-navbar-expand">
                        <img src="./Assets/Images/logo.png" class="WebPageHeader-logo" alt="网页Logo">
                        <button class="WebPageHeader-toggler WebPageHeader-mobile" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                            <span class="WebPageHeader-toggler-icon"></span>
                            <span class="WebPageHeader-toggler-icon"></span>
                            <span class="WebPageHeader-toggler-icon"></span>
                        </button>
                        <div class="WebPageHeader-collapse collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="WebPageHeader-nav navbar-nav ms-auto">
                                <li class="WebPageHeader-link"><a href="https://tcc-mc.com">🌐官网首页🌐</a></li>
                                <li class="WebPageHeader-link"><a href="https://www.123pan.com/s/17flVv-hnX0H.html" target="_blank">📦资源下载📦</a></li>
                                <li class="WebPageHeader-link"><a href="http://stats.tcc-mc.com" target="_blank">🔥数据统计🔥</a></li>
                                <li class="WebPageHeader-link">
                                    <a>🫵其它页面🫵</a>
                                    <ul class="WebPageHeader-sub collapse" id="submenu-1-2">
                                        <li class="WebPageHeader-link"><a href="javascript:void(0)">更多-没做好(</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="https://docs.qq.com/aio/DZGZrVFVqTERCTmNn" target="_blank" class="WebPageHeader-faq">常见问题-FaQ</a>
                            <a href="javascript:void(0)" target="_blank" class="WebPageHeader-login">立🐔登录-没做好(</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="section-index">
        <div class="TccSitePage-title">
            <h2>目前在线玩家<?php echo $players_online; ?>/<?php echo $players_max; ?></h2>
            <p>🔥你可以在这里看见Tcc的在线玩家🔥<br/>🔥使用Ctrl F进行搜索和Ctrl F5刷新🔥.</p>
        </div>

        <?php if (is_array($Players)) : ?>
        <?php foreach($Players as $Player) : ?>
            <?php echo '<img src="http://cravatar.eu/helmhead/'.htmlspecialchars($Player).'/15.png"> '?><h5><?php echo htmlspecialchars($Player)?></h5><br>
        <?php endforeach; ?>
        <?php else: ?>
        无玩家在线。
        <?php endif; ?>
    </section>
    <!--站点页脚部分 2024/2/9 By Tim-->
    <footer class="WebPageFooter SiteGlobalSection" style="background-color: #F4F7FA">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="WebPageFooter-single WebPageFooter-about">
                        <p>
                            <span>我的世界Java<?php echo $version;?>服务器,由Folia强力驱动.</span>
                            <br/>
                            <span>官网优化/意见/问题反馈QQ:2662344413.</span>
                            <br/>
                            <span>累计访问次数:<?php echo $newnum;?>.</span>
                            <br/>
                            <span>浏览器内核/名字:<span class="OrangeFonts"><?php echo $BrowserType;?>.</span></span>
                            <br/>
                            <span><?php echo $BrowserText;?>.</span>
                            <br/>
                            <?php if ($BrowserIE==true) {?>
                                <span>下载已经适配的浏览器:<a href="https://www.microsoft.com/zh-cn/edge/download?form=MA13FJ" target="_blank">Edge</a>.</span>
                            <?php }?>
                        </p>
                        <p><span class="OrangeFonts">Copyright <span class="BlueFonts">1T2C</span> 2024.All Rights Reserved.</span></p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="WebPageFooter-single WebPageFooter-link">
                        <h3>游戏资源</h3>
                        <ul>
                            <li><a href="https://www.123pan.com/s/17flVv-hnX0H.html" target="_blank">1T2C整合包</a></li>
                            <li><a href="https://www.mcmod.cn/modpack/467.html" target="_blank">XPlus 1.20.1整合包</a></li>
                            <li><a href="https://crashmc.com/" target="_blank">启动器崩溃分析指南</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="WebPageFooter-single WebPageFooter-link">
                        <h3>快捷下载</h3>
                        <ul>
                            <li><a href="https://download.oracle.com/java/17/archive/jdk-17.0.10_windows-x64_bin.exe" target="_blank">Java JDK17</a></li>
                            <li><a href="https://cdn.azul.com/zulu/bin/zulu21.32.17-ca-jdk21.0.2-win_x64.msi" target="_blank">Java Zulu21</a></li>
                            <li><a href="https://afdian.net/p/0164034c016c11ebafcb52540025c377" target="_blank">Pcl-2启动器</a></li>
                            <li><a href="https://hmcl.huangyuhui.net/download/" target="_blank">Hmcl启动器</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="WebPageFooter-single WebPageFooter-link">
                        <h3>友情链接</h3>
                        <ul>
                            <li><a href="https://ys.mihoyo.com/" target="_blank">原神</a></li>
                            <li><a href="https://ymzx.qq.com/" target="_blank">元梦之星</a></li>
                            <li><a href="https://www.xbox.com/zh-CN/games/store/palworld-game-preview/9nkv34xdw014" target="_blank">幻兽帕鲁</a></li>
                            <li><a href="https://sr.mihoyo.com/" target="_blank">崩坏·星穹铁道</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="WebPageFooter-single WebPageFooter-link">
                        <h3>友链X2</h3>
                        <ul>
                            <li><a href="https://www.minecraft.net/zh-hans" target="_blank">Minecraft</a></li>
                            <li><a href="https://papermc.io/software/folia" target="_blank">Folia-Papermc</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>