<?php
require_once __DIR__.'/PhPFile/Data.php';
require_once __DIR__.'/PhPFile/Mainp.php';
?>
<!--
==========================================
本少就猜到你们会来看代码
如果对本站代码有任何优化建议请联系网页页脚的qq/邮箱
既然都来到这了,不妨看看控制台?
==========================================
网页测试
Compatibility-Testing--Pass Tim 2024/6/1 - Ver2
Security-Testing--Pass Tim 2024/6/1 - Ver2
UI-Testing--Pass Tim 2024/6/1 - Ver2
==========================================
Css Framework By Bootstrap -- https://v5.bootcss.com
Js Framework By Bootstrap -- https://v5.bootcss.com
SiteCss By Tim -- https://tcc-mc.com
SiteJs By Tim -- https://tcc-mc.com
==========================================
-->
<!DOCTYPE html>
<html lang="zh-CN">
    <!--头部标签部分 2024/2/9 By Tim-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="theme-color" content="#48d1cc">
        <title>1T2C Server - [正版]我的世界Java服务器</title>
        <!-- SEO Meta-->
        <meta name="author" content="1T2C,Tcc">
        <meta name="keywords" content="tcc,1t2c,tcc服务器官网,我的世界,服务器,java,正版,官方,纯净生存,冒险,生存,沙盒,联机,原版,多人联机,Folia,土豆服,优质土豆,TrustCareCommit,生存大佬,PVP大佬,tcc我的世界服务器,我的世界java服务器,我的世界正版服务器,我的世界多人联机,我的世界服务器,java我的世界服务器">
        <meta name="description" content="Java1.20.X我的世界服务器-运行多核Folia核心-稳定机房服务器长期运行">
        <meta name="copyright" content="Tim">
        <meta name="robots" content="index,follow">
        <meta name="generator" content="PhpStorm">
        <meta name="revisit-after" content="1 days">
        <!--Web Control-->
        <meta http-equiv="content-type" content="no-cache">
        <meta http-equiv="content-type" content="no-transform">
        <meta http-equiv="content-type" content="no-siteapp">
        <meta name="applicable-device" content="pc,mobile">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
        <!--Web Icon Tags-->
        <link rel="shortcut icon" href="./Assets/Images/favicon.ico">
        <!--Link Style-->
        <link rel="stylesheet" href="./Assets/Css/bootstrap.min.css">
        <link rel="stylesheet" href="./Assets/Css/main.css">
        <!--Link Script-->
    </head>
    <body>
        <!--站点页头部分 2024/2/9 By Tim-->
        <header class="WebPageHeader WebPageHeader-area">
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
                                                <li class="WebPageHeader-link"><a href="https://bot.kiki-items.cn/"target="_blank">定制KiKi-Bot</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="button">
                                    <a href="https://docs.qq.com/aio/DZGZrVFVqTERCTmNn" target="_blank" class="WebPageHeader-faq">常见问题</a>
                                    <a href="javascript:void(0)" target="_blank" class="WebPageHeader-login">立🐔登录</a>
                                </div>
                            </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--网页页面-1部分 2024/1/10 By Tim-->
        <section class="TccSiteFirstPage">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="TccSiteFirstPage-text">
                            <h1><span class="Color-48d1cc">欢迎来到</span>
                                <span class="Color-48d1cc">Tcc的全新网页</span>😉
                                <br/>
                                <span class="Color-33e6cc">New WebSite Of  1T2C🎉</span>
                            </h1>
                            <p>
                                <span class="Color-4d80e6">♥️我们特意重新构建了网页，只为您更美好的体验.♥️</span>
                                <br>
                                <span class="Color-4d80e6">🔥并加入了许多功能，希望您对Tcc的热爱持之以恒.🔥</span>
                            </p>
                            <div class="button">
                                <a href="https://www.bilibili.com/video/BV1ma4y1y7CA/?spm_id_from=333.788" target="_blank" class="btn">🔥点击即可加入Tcc!!!🔥</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="TccSiteFirstPage-img">
                            <img src="./Assets/Images/Image_1706264651337.gif" alt="提嘻嘻小合照">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--网页页面-2部分 2024/2/3 By Tim-->
        <section class="TccSiteStatus SiteGlobalSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="TccSitePage-title">
                            <h2><span class="Color-48d1cc">🌍服务器状态</span><span class="BlueFonts">--</span><span class="OrangeFonts">1T2C Server🌍</span>
                            </h2>
                            <p>💐你可以在这里查看到服务器的状态,实时刷新💐<br/>😭如果是离线状态&&状态是连接中,那大概率被打了...😭</p>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-4">
                        <div class="TccSiteStatus-status">
                            <h3>🌍Mc服务器人数:<span class="Color-f26522"><span id="onlinePlayers">加载中...</span>🌍</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="TccSiteStatus-status">
                            <h3>🔥服务器TPS状态:<span class="Color-f26522"><span id="tps">加载中...</span></span>🔥</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="TccSiteStatus-status">
                            <h3>👫查询时间:<span class="Color-f26522"><span id="queryLatency">加载中...</span></span>👫</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="TccSiteStatus-status">
                            <h3>🪪CPU使用率:<span class="Color-f26522"><span id="cpuUsage">加载中...</span></span>🪪</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="TccSiteStatus-status">
                            <h3>📦内存使用率:<span class="Color-f26522"><span id="memoryStatus">加载中...</span></span>📦</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="TccSiteStatus-status">
                            <h3>👫U/D流量:<span class="Color-f26522"><span id="netIO">加载中...</span></span>👫</h3>
                        </div>
                    </div>
            </div>
        </section>
        <!--网页页面-3部分 2024/2/8 By Tim-->
        <section class="TccSiteActivity SiteGlobalSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="TccSitePage-title">
                            <h2>
                                <span class="Color-48d1cc">🔥来自<span class="OrangeFonts">1T2C</span>最火热的<span class="OrangeFonts">活动</span>🔥</span>
                            </h2>
                            <p>🔥这里有1T2C最新的活动公告🔥<br/>🔥你可以前往1T2C大群查看公告参加报名🔥.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="TccSiteActivity-grid">
                            <div class="TccSiteActivity-img">
                                <img src="./Assets/Images/D9B55A82BAA907E8F6DBBD3CE1C4C044.png" alt="冰船比赛场地">
                            </div>
                            <div class="TccSiteActivity-content">
                                <h3><span class="BlueFonts">Tcc第🥇届珍珠杯🚢</span></h3>
                                <p>
                                    Tcc服务器第一届珍珠杯----<span class="BlueFonts">🚢冰船比赛🚢</span>.
                                    <br/>
                                    比赛为淘汰赛制度<span class="OrangeFonts"> 64/8=8->8/2=4->4/2=2->1v1</span>
                                    <br/>
                                    <span class="Color-f26522">已举行</span>
                                </p>
                                <a class="TccSiteActivity-more">可前往大群公告查看</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="TccSiteActivity-grid">
                            <div class="TccSiteActivity-img">
                                <img src="Assets/Images/Image_1707286897526.jpg" alt="云山源PVP场地">
                            </div>
                            <div class="TccSiteActivity-content">
                                <h3>
                                    <span class="OrangeFonts">云山源第一届PVP大赛</span>
                                </h3>
                                <p> 云山源第一届pvp大赛(测试版)<span class="BlueFonts">即将举行</span>.
                                    <br/>
                                    比赛分为pvp晋级赛和3v3v3v3叠叠乐两项
                                    <br/>
                                    <span class="Color-f26522">已举行</span>
                                </p>
                                <a class="TccSiteActivity-more">可前往大群公告查看</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="TccSiteActivity-grid">
                            <div class="TccSiteActivity-img">
                                <img src="Assets/Images/null-4330a6f2bb584ce2..jpg" alt="百关跑酷活动场地">
                            </div>
                            <div class="TccSiteActivity-content">
                                <h3>
                                    <span class="OrangeFonts">Tcc百关跑酷</span>
                                </h3>
                                <p> 无需参赛费，人人可得奖
                                    <br/>
                                    可得合金锭1～25个/彩色id/炫彩称号
                                    <br/>
                                    <span class="Color-f26522">活动时间2月15日15:00</span>
                                </p>
                                <a class="TccSiteActivity-more">可前往大群公告查看</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--网页页面-4部分 2024/2/9 By Tim-->
        <section class="TccSiteSpecs SiteGlobalSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="TccSitePage-title">
                            <h2><span class="Color-48d1cc">🥔服务器配置<span class="OrangeFonts">&</span>提升🥔</span></h2>
                            <p>🥔服务器大量采用遥遥领先的设备,🥔<br/>🥔包括但不止于航天级,宇宙级,军工品质,老母猪电源🥔.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="TccSiteSpecs-specs">
                            <div class="TccSiteSpecs-icon">
                                <img src="./Assets/Images/Svg/Logo/ServerConfigSide/amd.svg" alt="AmdR9照片">
                            </div>
                            <h3>😍<span class="Color-f26522">AMD</span> 锐龙9 <span class="Color-f26522">7950X</span>处理器😍</h3>
                            <p>💥服务器采用R9级高性能航天级处理器,<br />
                                大幅度减少卡顿掉刻等情况💥.
                            </p>
                            <a href="https://www.amd.com/en/products/processors/desktops/ryzen/7000-series/amd-ryzen-9-7950x.html" target="_blank">♿深入了解一下♿</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="TccSiteSpecs-specs" id="folia">
                            <div class="TccSiteSpecs-icon" id="folia-icon">
                                <svg viewBox="0,0,25,25">
                                    <path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8" style="fill:#fff">
                                    </path>
                                </svg>
                            </div>
                            <h3>😘<span class="Color-71e600">Folia </span>多线程服务端😘</h3>
                            <p>🔥为原版生存准备的服务端,<br/>
                                可单端多线程运行Java版服务器的服务端🔥.
                            </p>
                            <a href="https://papermc.io/software/folia" target="_blank">♿简单了解一下♿</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="TccSiteSpecs-specs">
                            <div class="TccSiteSpecs-icon">
                                <img src="./Assets/Images/ddr5_feature_01_01_pc.png" alt="三星DDR5照片">
                            </div>
                            <h3>🥰64G DDR5内存🥰</h3>
                            <p>💫采用64G DDR5大内存<br />
                                能承受140人同时在线的游戏需求💫.</p>
                            <a href="https://semiconductor.samsung.com/cn/dram/ddr/ddr5/" target="_blank">♿浅浅了解一下♿</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--网页页面-5部分 2024/2/9 By Tim-->
        <section class="TccSitePricing SiteGlobalSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="TccSitePage-title">
                            <h2>
                                <span class="Color-48d1cc">🎁赞助计划<span class="OrangeFonts">/</span>称号购买🎁</span>
                            </h2>
                            <p>😍你可以在这里购买到Tcc服务器的炫酷称号😍<br/>⚠️一切都要在力所能及的前提下购买,未成年需家长知情&同意下购买⚠️</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="TccSitePricing-table">
                            <div class="TccSitePricing-head">
                                <h4 class="Color-00fa6b">彩色ID·支持RGB十六进制色</h4>
                                <p>🎁彩色ID，支持RGB十六进制🎁<br/>注意：此项不是称号!此项不是称号!️</p>
                                <div class="TccSitePricing-price">
                                    <h4 class="TccSitePricing-priced"><span class="Color-FFCCCC">16¥</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="button">
                                <a href="https://afdian.net/item/c329a040c51811eea25d52540025c377" target="_blank" class="btn">🤤点击传送到购买🤤</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="TccSitePricing-table">
                            <div class="TccSitePricing-head">
                                <h4 class="Green-blue">『炫彩称号』·支持渐变</h4>
                                <p>🎁Tcc炫彩称号购买🎁<br/>支持原版颜色代码,同时也支持16进制渐变色</p>
                                <div class="TccSitePricing-price">
                                    <h4 class="TccSitePricing-priced"><span class="Color-FFCCCC">40¥</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="button">
                                <a href="https://afdian.net/item/0e12f83a761911eeafa55254001e7c00" target="_blank" class="btn">🤤点击传送到购买🤤</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="TccSitePricing-table">
                            <div class="TccSitePricing-head">
                                <h4 class="Purple-orange-yellow">至尊·[不限次数]自由更改称号</h4>
                                <p>😍拥有完整的Prefix权限😍<br/>可在游戏内自由更改自己账号的称号以及ID颜色</p>
                                <div class="TccSitePricing-price">
                                    <h4 class="TccSitePricing-priced"><span class="Color-FFCCCC">200¥</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="button">
                                <a href="https://afdian.net/item/f5fdf48c761f11ee856952540025c377" target="_blank" class="btn">🤤点击传送到购买🤤</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="TccSitePricing-table">
                            <div class="TccSitePricing-head">
                                <h4 class="Color-71e600">『KiKi-Bot』·组织机器人功能定制</h4>
                                <p>😍可以定制属于自己组织的Bot😍<br/>详情访问下列连接来定制机器人,定制产品不可退换</p>
                                <div class="TccSitePricing-price">
                                    <h4 class="TccSitePricing-priced"><span class="Color-FFCCCC">25¥</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="button">
                                <a href="https://bot.kiki-items.cn" target="_blank" class="btn">🤤点击传送🤤</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--站点页脚部分 2024/2/9 By Tim-->
        <footer class="WebPageFooter SiteGlobalSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="WebPageFooter-single WebPageFooter-about">
                            <p>
                                <span>我的世界Java-1.20.4服务器,由Folia强力驱动.</span>
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
                                <li><a href="https://mc.kurogames.com/main">鸣潮</a></li>
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
        <!--返回顶部按钮 2024/2/9 By Tim-->
        <a href="#" class="SiteScroll-top"><img src="./Assets/Images/Svg/Index/Youajing-scroll-top.svg" alt="油阿金小头照"></a>
        <!--引入外部Js 2023/12/24 By Tim-->
        <script src="./Assets/js/Status.js"></script>
        <script src="./Assets/js/bootstrap.min.js"></script>
        <script src="Assets/js/Main.js"></script>
    </body>
</html>
<!--
       　  　▃▆█▇▄▖
　 　 　 ▟◤▖　　　◥█▎
   　 ◢◤　 ▐　　　 　▐▉
　 ▗◤　　　▂　▗▖　　▕█▎
　◤　▗▅▖◥▄　▀◣　　█▊
▐　▕▎◥▖◣◤　　　　◢██
█◣　◥▅█▀　　　　▐██◤
▐█▙▂　　     　◢██◤
◥██◣　　　　◢▄◤
 　　▀██▅▇▀


哲学♂ 114514
-->