﻿    <?php
    date_default_timezone_set('Asia/Shanghai');
    include 'dbh.inc.php';
    include 'comments.inc.php';
    session_start();
    
?>

<!DOCTYPE html>
<html>
<head>



    <title>给小鹿的</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>




    <p class="popout" id="pop">
        <span>L</span>
        <span>O</span>
        <span>V</span>
        <span>E</span><br>
        <span>F</span>
        <span>O</span>
        <span>R</span><br>
        <span>E</span>
        <span>V</span>
        <span>E</span>
        <span>R</span>

    </p>

    <div class="head" id="head">

        <dd>
            <b> 让这个网站记录咱们的爱情和咱们感情一起成长</b>
        </dd>
    </div>

    <div class="apology" id="ap">

        <dd>
            宝贝。
        </dd>
    </div>

    <div class="apology2" id="ap2">

        <dd>
            你今天是又做噩梦了吗？
        </dd>
    </div>

    <div class="apology3" id="ap3">

        <dd>
            好心疼啊
        </dd>
    </div>

    <div class="apology4" id="ap4">

        <dd>
            我今天格外的想你
        </dd>
    </div>

    <div class="apology5" id="ap5">

        <dd>
            我永远爱你，宝贝😘
        </dd>
    </div>

    <div class="apology6" id="ap6">

        <dd>
           
        </dd>
    </div>
    <div class="timer" id="demo"></div>
    <br><br><br>
    <div class="img" id="show">
        <img class="mySlides fade" src="image/his1.jpg">
        <img class="mySlides fade" src="image/his2.jpg">
        <img class="mySlides fade" src="image/his3.jpg">
    </div>
    <br>
    <audio id="music" src="music2.mp3" loop></audio>
    <br>
    <button class="mbnt" id="mbnt" onclick="document.getElementById('music').play()">Play</button>

    <br>
    

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 27, 2020 9:37:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = now - countDownDate;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = "相识 " + days + " 天 " + hours + " 小时 "
                + minutes + " 分钟 " + seconds + " 秒 ";


        }, 1000);


        var ap = document.getElementById('ap');

        setTimeout(function () {
            ap.style.display = 'none';
        }, 5000);

        var ap2 = document.getElementById('ap2');

        setTimeout(function () {
            ap2.style.display = 'inline';
        }, 5000);
        setTimeout(function () {
            ap2.style.display = 'none';
        }, 10000);

        var ap3 = document.getElementById('ap3');

        setTimeout(function () {
            ap3.style.display = 'inline';
        }, 10000);
        setTimeout(function () {
            ap3.style.display = 'none';
        }, 15000);

        var ap4 = document.getElementById('ap4');

        setTimeout(function () {
            ap4.style.display = 'inline';
        }, 15000);
        setTimeout(function () {
            ap4.style.display = 'none';
        }, 20000);

        var ap5 = document.getElementById('ap5');

        setTimeout(function () {
            ap5.style.display = 'inline';
        }, 20000);
        setTimeout(function () {
            ap5.style.display = 'none';
        }, 25000);

        var ap6 = document.getElementById('ap6');

        setTimeout(function () {
            ap6.style.display = 'inline';
        }, 25000);
        setTimeout(function () {
            ap6.style.display = 'none';
        }, 30000);
    </script>



    <div class="c1" id="c1">
        
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/11/2020，宝贝今天还在做登录系统，不知道为啥就是不行😭<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd></dd>
            <br>
            <dd>今天又下了一天雨</dd>
            <br>
            <dd>在这种雨天格外的想你</dd>
            <br>
            
            <dd>--爱你的哥哥</dd>
            <br>
            
            </b>
        
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/10/2020，宝贝今天本来想做个登录系统的但是卡住了😥！<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd></dd>
            <br>
            <dd>双木非林</dd>
            <br>
            <dd>田下有心</dd>
            <br>
            
            <dd>--顾城</dd>
            <br>
            
            </b>
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/9/2020，宝贝，宝贝，今天留言功能终于上线了，来表达对彼此的爱吧！<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd></dd>
            <br>
            <dd>我的每一句誓言</dd>
            <br>
            <dd>都是真的</dd>
            <br>
            <dd>现在是真的</dd>
            <br>
            <dd>未来也是真的</dd>
            <br>
            <dd>因为我相信自己</dd>
            <br>
            <dd>也更相信你</dd>
            <br>

            <dd>--爱你的哥哥</dd>
            <br>
            
            </b>

        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/8/2020，宝贝，今天今天还在写服务器端，还有不少东西要学，进度好慢啊，爱你宝贝😭<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd>我看到你就会微笑</dd>
            <br>
            <dd>语音时，虽然你看不到我</dd>
            <br>
            <dd>我也在微笑</dd>
            <br>
            <dd>你做饭洗脸时，听到你的声音</dd>
            <br>
            <dd>我也在微笑</dd>
            <br>
            <dd>你睡了，听到你微弱的转身声</dd>
            <br>
            <dd>我还会微笑</dd>
            <br>
            <dd>是一种拥有世界上最珍贵东西的微笑</dd>
            <br>
            <br>
            <dd>--爱你的哥哥</dd>
            <br>

        </b>
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/7/2020，宝贝，今天想要运行那个php文件弄了好久，应该明天或者后天就能实现留言功能了吧，爱你宝贝<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd>你连指尖都泛出好看的颜色 。</dd>
            <br>
            <dd>爱你，</dd>
            <br>
            <dd>从发丝到指尖。</dd>
            <br>

            <dd>--川端康成</dd>
            <br>

        </b>
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/6/2020，今天开始弄留言系统了宝贝，我的宝贝今天做噩梦了，我好心疼啊😢<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd>宝贝，我全心的爱你</dd>
            <br>
            <dd>现在你可能还有疑虑</dd>
            <br>
            <dd>我愿意用一辈子时间打消这些疑虑</dd>
            <br>
            <dd>让我的宝贝真正的安心</dd>
            <br />
            <dd>--爱你的哥哥</dd>
            <br>

        </b>

        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/5/2020，今天加入了认错道歉系统，今天又惹宝贝不开心了，我真的不想让你受一点伤害啊宝贝。我错了😥<br>

        </dd>
        <br><br>
        <b>
            <dd></dd>
            <br>
            <dd>Everything I do, I do it for you.</dd>
            <br>
            <dd>我做的所有事都是为你而做</dd>
            <br>
            <dd>― Bryan Adams</dd>
            <br>

        </b>
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/4/2020，今天没更新什么内容，但是对宝贝的爱却是每天都在增加<br>

        </dd>
        <br><br>
        <b>
            <dd>“I swear I couldn't love you more than I do right now, and yet I know I will tomorrow.”</dd>
            <br>
            <dd>“我发誓我没法比现在还要更爱你，但是我知道我明天还会更爱你。”</dd>
            <br>
            <dd>― Leo Christopher</dd>
            <br>

        </b>

        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/3/2020，今天是我和我的宝贝相识第一个一百天，以后你生命中的每个重要的日子都会有我陪伴<br>

        </dd>
        <br><br>
        <b>
            <dd>一百天</dd>
            <br>
            <dd>两百天</dd>
            <br>
            <dd>一年</dd>
            <br>
            <dd>两年</dd>
            <br>
            <dd>一辈子</dd>
            <br>
            <dd>两个人</dd>
            <br>
            <dd>--爱你的小王子</dd>
        </b>
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是9/2/2020，收到最可爱的女朋友的指令，尽力让网站更好看一点，我爱我的宝贝，永远爱你<br>

        </dd>
        <br><br>
        <b>
            <dd>我不要儿子，</dd>
            <br>
            <dd>我要女儿——只要一个，</dd>
            <br>
            <dd>像你的</dd>
            <br>
            <dd>--钱钟书</dd>
        </b>

        <dd>
            <br>
            <br><br>
            <br><br>
        <dd>
            今天是9/1/2020，今天有些头疼可能昨天没怎么睡，还在学后端的东西，我爱你宝贝。<br>

        </dd>
        <br><br>
        <b>
            <dd>今天陪伴了宝贝一晚</dd>
            <br>
            <dd>想让宝贝知道</dd>
            <br>
            <dd>她人生中的每一天</dd>
            <br>
            <dd>需要我的时候我都会在</dd>
            <br>
            <dd>--爱你的哥哥</dd>
        </b>
        <br>
        <br><br>
        <br><br>
        <dd>
            今天是8/31/2020，今天增加了留言的表格功能还没有实现因为需要服务器代码跟数据库，这是我最想实现的一个功能，想要在这个网站和我宝贝互动，但是需要几天来完成。<br>
            这几天可能网站在外观上没有什么变化但是会有很多东西要学，爱你宝贝。
        </dd>
        <br><br>
        <b>
            <dd>
                谢谢宝贝10个小时的陪伴
                <br>
            <dd>无以为报，</dd>
            <br>
            <dd>只能相伴一生。</dd>
            <br>
            <dd>--爱你的哥哥</dd>
        </b>
        <br>
        <br><br>
        <br><br>
        <dd>8/30/2020，今天给计时器向左的效果，还加入了一个按键播放音乐。</dd>
        <br><br>
        <b>
            <dd>如果有来生</dd>
            <br>
            <dd>希望每次的相逢，</dd>
            <br>
            <dd>都能化为永恒。</dd>
            <br>
            <dd>三毛《说给自己听》</dd>
        </b>

        <br><br>
        <br><br>
        <dd>
            今天是8/29/2020，今天给计时器增加了一些效果，让它更能展现咱们的爱
        </dd>
        <br><br>
        <b>
            <dd>你所希望我的，规劝我的话</dd>
            <br>
            <dd>我以后一定牢牢记着，</dd>
            <br>
            <dd>假使我将来若有一点成就的时候，</dd>
            <br>
            <dd>那么我这一点成就的荣耀，愿意全部归赠给你。</dd>
            <br>

            <dd>——郁达夫</dd>
        </b>
        <br><br>
        <dd>今天是8/28/2020，今天简单调整了布局，让图片的高度固定，本来还想更新更多但是遇到了些问题，我爱你宝贝</dd>
        <br><br>
        <b>
            <dd>见到她之前，从未想到过结婚；</dd>
            <br>
            <dd>遇见你，</dd>
            <br>
            <dd>结婚这件事我没想过和别人。</dd>
            <br>

            <dd>——钱钟书</dd>
        </b>
        <br>
        <br>
        <b>
            <dd> 今天是8/27/2020，今天增加了记录咱们相识时间的功能，我要让它延续到永远。</dd>
            <dd>我半生穿过枫叶 抖落白雪</dd>
            <br>
            <dd>就为奔向你面前</dd>
            <br>
            <dd>由你在我手心 塞一片春天</dd>
            <br>
            <dd>--姚若龙</dd>
        </b>
        <br>
        <br><br>
        <dd>
            8/26/2020，今天增加了手动转换图片的功能
        </dd>
        <br><br>
        <b>
            <dd>草在结它的种子，风在摇晃它的叶子</dd>
            <br>
            <dd>我们站着不说话，就十分美好。</dd>
            <br>
            <dd>--顾城</dd>
        </b>



    </div>
        <?php
    echo"<form method='POST' action = '".getLogin($conn)."'>
    <input type='text' name='uid' >
    <input type='password' name='pwd'>
    <button  name='loginSubmit' >登录</button>
    </form>";
    echo"<form method='POST' action = '".userLogout()."'>
    <button name='logoutSubmit' >注销</button>
    </form>";
    
?>
    <br>
   
    <br>
    <?php
    
    if(isset($_SESSION['id'])){
    echo "<form class='comment' method='POST' action = '".setComments($conn)."'>
    <label for='uid'>昵称： </label>
    <input type='text' name='uid' value=''><br><br>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <label for='com'>留言： </label>
    <textarea name='message'></textarea> <br> <br>
    <button  class = 'subbut' type='submit' name='commentSubmit' >留言</button>
    </form>";
    }
    
    getComments($conn);
    ?>


<br> <br>
    <div class="c2" id="c2">
        <dd>..</dd>
        <dt>我爱你宝贝</dt>
        <dd>这个网站还只是个雏形，我对于写网页完全是个新手，还有很多要学，很多地方要增加功能和完善。</dd>
        <dd>它也代表了我对你的爱，虽然炽烈但是还有很多不足。我在完善这个网站的同时也会完善我对你的爱。</dd>
        <dd>人生一路至此，遇到你是我最大的惊喜。</dd>
        <dd>每天对你说永远不只是说说而已，我对咱们的爱抱有永恒的执着。</dd>
        <dd>今天也好想你，但是克制住了认真的一直在写网页。</dd>
        <dd>宝贝我对生活充满劲头，也能为你遮风避雨，今天是向你证明的我的承诺的开始</dd>
        <dd>我之前的承诺也不会一遍一遍的提了，让我用行动证明</dd>
    </div>

    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>





    <div class="slideShow">
        <script>
            var slideIndex = 0;
            slideShow();

            function slideShow() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) { slideIndex = 1 }
                x[slideIndex - 1].style.display = "block";
                setTimeout(slideShow, 4000); // Change image every 4 seconds
            }

        </script>
    </div>








</body>
</html>
