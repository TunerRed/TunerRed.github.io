<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于</title>
    <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all" />
	<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <style>
        body {
            margin: auto;
            text-align: center;
            min-height: 1800px;
            font-size: 14px;
        }
        #wrapper p {
            border-top: 1px dotted;
            border-color: #cccccc;
            padding-top: 3px;
            font-size: 130%;
        }
    </style>

</head>
<body>
<?php include("style/header.php"); ?>

<div id="container">
    <div id="header1"></div>
    <div id="wrapper" style="background: rgba(150,150,150,0.3) repeat-y; margin-top: -40px">
        <img style="margin-top: 20px" src="style/images/gif/about.gif" />
	    <div class="divider"></div>
	    <div style="margin-top: 10px">
		    <select onchange="window.location=this.value">
			    <option value ="#header1">跳转至此</option>
			    <option value ="#start">启动方法</option>
			    <option value ="#overview">游戏概要</option>
			    <option value ="#control">操作方法</option>
			    <option value ="#itemUse">物品使用方法</option>
			    <option value ="#strategy">关于攻略</option>
			    <option value ="#environment">运作环境</option>
			    <option value ="#uninstall">卸载方法</option>
			    <option value ="#attention">注意事项</option>
			    <option value ="#live">视频网站投稿</option>
			    <option value ="#update">更新内容</option>
		    </select>
	    </div>
        <div class="divider"></div>
        <div>
            <p id="start">■启动方法</p><br/>
            双击[Game.exe] 启动游戏。<br/><br/>

            <p id="overview">■游戏概要</p><br/>
            标题： 东方梦黎明<br/>
            类型： 恐怖解谜冒险类<br/>
            预测游戏时间：  3分钟～10分钟<br/>
            游玩对象年龄：  10岁以上<br/>
            结局数量： 2<br/><br/>
            ※游戏中有惊吓、流血等画面，请胆小的玩家不要尝试。<br/><br/>

            <p id="control">■操作方法</p><br/>
            主人公的移动： 方向键（↑／←／→／↓）<br/>
            确定：       Z键<br/>
            取消菜单 ：   X键<br/>
            跑步：       Z键<br/>
            存档：       C键<br/>
            读档：     在菜单画面中读档<br/>
            游戏结束：  在菜单画面中结束游戏<br/><br/>

            <p id="itemUse">■物品使用方法</p><br/>
            物品自动使用。<br/>
            请参考物品的说明。<br/><br/>

            <p id="strategy">■关于攻略</p><br/>
            攻略在<a style="color: crimson;font-size: 120%;" href="index.php">主页</a>中。<br/><br/>

            <p id="environment">■运作环境</p><br/>
            使用中文编码的电脑，需要根据自己的需求下载不同版本<br/>
            CPU Intel(R) Pentium(R) III 1.0GHz及以上<br/>
            内存 256MB以上<br/>
            显示器 分辨率800*600以上<br/><br/>

            <p id="uninstall">■卸载方法</p><br/>
            把文件夹移到回收站即可。<br/><br/>


            <p id="attention">■注意事项</p><br/>
            本游戏不保证所有人都可正常运行。<br/>
            本作品游玩时若发生人身伤害，作者一概不负责。<br/>
            本作品禁止二次发布。<br/>
            本作品禁止修改后再次发布。<br/>
            本作品免费。<br/><br/>


            <p id="live">■关于游戏影像・实况影像（包括直播）向视频网站投稿</p><br/>
            无需制作者许可。<br/>
            请在影像标题上注明本游戏名称。<br/><br/>

            <p id="update">■更新内容</p><br/>
            加入了追逐战部分的音乐<br/>
            优化地图，防止玩家提前提前读到剧情<br/>
            更改物品栏设定，使用后物品不会消失<br/>
            修正了追逐战时能调出存档界面的bug<br/>
            新添反馈功能<br/>
        </div>
    </div>
</div>


<?php include("style/footer.html"); ?>

</body>
</html>