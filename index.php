<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

  <title>东方梦黎明</title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all" />
  <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
</head>

<body>
  <?php include("style/header.php"); ?>
  

  <div id="container">
    <div id="header1"></div>
    <div style="display: inline">
      <div id="imgLeft"></div>
      <div id="wrapper">
        <div id="smoothmenu1">
            <ul id="tab-menu" class="ddsmoothmenu">
              <li>Overview</li>

              <li>Download</li>

              <li>Strategy</li>

              <li>Material</li>
            </ul>

            <div class="tab-content">

              <!-- 总览 Starts -->
              <div class="tab" id="tab0">
                <h1>总览</h1>

                <div id="sliderbg">
                  <div id="slider-wrapper">
                    <!-- 这里用一个脚本实现图片切换 -->
                    <img id="slider_src" src="style/images/pic/slider1.png" height="300" width="400" border="0" />
                  </div>
                </div>

                <div class="clear"></div>
                <div class="divider"></div>

                <p style="font-size: 18px; color: #fafafa">欢迎来到《东方梦黎明》中文站。</p>
                <p>本网站是RPG解谜游戏《东方梦黎明》官方网站，提供对《东方梦黎明》的下载。</p>

                <ul class="bullet">
                  <li>本游戏属于“东方Project”二次创作，剧情原创，使用“东方Project”人设。</li>
                  <li>此游戏为作者大一Java课程设计，游戏性还是有许多不足，流畅度有待提高，剧情也并不完善，如果您想要试玩，请移步‘下载’区，根据系统配置选择下载版本</li>
                  <li>最新版本：1.5</li>
                </ul>

                <p>祝您玩的愉快！</p>
              </div>
              <!-- 总览 Ends -->
              <!--下载 Starts -->
              <div class="tab" id="tab1" hidden>
                <h1>下载</h1>
                <ul class="inner_tab" id="download">
                  <li><a href="#">Java版本-jar</a></li>
                  <li><a href="#">应用程序版本-exe</a></li>
                  <li><a href="#">源代码版本-java</a></li>
                </ul>
                <div class="panes">
                  <div>
                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>
                    <div class="one-half last">
                      <p>最快捷简便的游戏启动方式，适用于所有已安装Java的电脑，不限平台</p>
                      <input class="button" type="button" value="点我下载" onclick="javascript:location.href='php/info.php'" />
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div hidden>
                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>
                    <div class="one-half last">
                      <p>EXE版本的游戏，适用于多数未安装jvm虚拟机的Windows系统电脑</p>
                      <input class="button" type="button" value="点我下载" onclick="javascript:location.href='about.php'" />
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div hidden>
                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>
                    <div class="one-half last">
                      <p>本游戏的源代码版本，使用Java语言编写，使用了awt和swing等技术，使用MVC架构。
                        运行可能会出现找不到资源的情况，请调试前备份bin文件夹下的source文件夹</p>
                      <input class="button" type="button" value="点我下载" onclick="javascript:location.href='source/game_1.4_src.rar'" />
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <!-- 下载 Ends -->
              <!--攻略 Starts -->
              <div class="tab" id="tab2" hidden>
                <h1>攻略</h1>
                <ul class="inner_tab" id="strategy">
                  <li><a href="#">主线</a></li>
                  <li><a href="#">真结局</a></li>
                  <li><a href="#">彩蛋</a></li>
                </ul>
                <div class="panes">
                  <div>
                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>

                    <div class="one-half last">
                      <p>醒来后向左走，遇到的是一个鬼打墙，只能够向右走，而此时右侧的门是被锁住的，因此需要找到一把钥匙。注意墙洞中是有物品可以拾取的的。</p>

                    </div>

                    <div class="clear"></div>

                    <div class="divider3"></div>

                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>

                    <div class="one-half last">
                      <p>大门无法立刻出去，但是我们可以在客厅房间的右上角看到一台电视，书店旁有书架。通过查找书架，会发现一张纸条。
                        阅读纸条之后，此时再去‘无法通过的房间’（鬼打墙的房间），就可以通过并见到最终BOSS。
                        在经过谈话后，将开始追逐战，此时逃向大厅门口即可</p>
                    </div>

                    <div class="clear"></div>
                  </div>
                  <div hidden>
                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>

                    <div class="one-half last">
                      <p>在客厅左下角的餐厅可以发现关键物品‘图书馆的钥匙’，可以前往左上方的图书室。</p>

                    </div>

                    <div class="clear"></div>

                    <div class="divider3"></div>

                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>

                    <div class="one-half last">
                      <p>图书室中通过调查会在某个书架上发现文字提示。同时，会在图书馆深处发现一个密码本，输入密码
                      <span href="#" style="background-color: #cccccc; color: #cccccc">1000</span> 后，可以查看日记本。
                      注意只解锁不查看的话是不会出发真结局的。</p>

                    </div>

                    <div class="clear"></div>
                  </div>
                  <div hidden>
                    <div class="one-half">
                      <img src="style/images/featured.jpg" alt="" width="280" height="210" class="featured-left" />
                    </div>

                    <div class="one-half last">
                      <p>在客厅右上方有一个卧室，里面会有一些与主线无关的内容，包括一些人物的海报，以及一个死亡点等，
                          期待你的探索（其实并没有太多内容因此并不能台梭到多少内容emmmmm）</p>
                    </div>

                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <!-- 攻略 Ends -->
              <!-- 素材 Starts -->
              <div class="tab" id="tab3" hidden>
                <h1>素材</h1>

                <p>音乐资源</p>

                <p>图片资源</p>
              </div>
              <!-- 素材 Ends -->

              <!-- 布局空div -->
              <div class="clearfix"></div>
            </div>
            <!-- 布局空div -->
            <div class="clear"></div>
          </div>
      </div>
      <div id="imgRight"></div>
    </div>
    <!-- 布局空div -->
    <div class="clearfix"></div>
  </div>


  <?php include("style/footer.html"); ?>
  <div><audio id="bgmusic" src="style/music/song.ogg" autoplay="true" loop="true"></audio></div>
  <!--js脚本-->
  <script type="text/javascript" src="style/js/picSlider.js"></script>
  <script type="text/javascript" src="style/js/navigator.js"></script>
</body>
</html>

