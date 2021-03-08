<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body{
            background: url("images/bgc.png");
        }
        .container{
            margin: 0 auto;
        }
        .banner{
            height: 150px;
            border: 1px solid black;
        }
        .nav{
            height: 30px;
            text-align: center;
            border: 1px solid black;

        }
        .nav li{
            float: left;
            display: block;
            list-style-type: none;
            margin-left: 180px;
        }
        .nav li a{
            text-decoration: none;
        }
        .content{
            position: relative;

        }

        .content-left{
            width: 30%;
            float: left;

        }
        .content-right{
            width: 70%;
            height: 100%;
            float: left;

        }
        a{
            text-decoration: none;
        }
        .message{
            padding: 10px;
            border-color: #2dc3e8;
            text-align:justify;
        }
        .footer{
            width: 100%;
            height: 50px;
            float: left;
            text-align: center;
            background-size: cover;
        }
    </style>
</head>
<script>

</script>

<body>
<div class="container">
    <div class="banner">
        <img src="/images/banner.jpeg" width="100%" height="100%" >
    </div>
    <div class="nav">
        <li><a href="/home/">首页</a></li>
        <li><a href="/home/article">文章</a></li>
        <li><a href="/home/self">个人中心</a></li>
    </div>
    <div class="content">
        <div class="content-left">
            <div>
                <br><br>
                <td><a href="/home/self/update">修改个人信息</a></td>
            </div>
            <div>
                <br><br>
                <td><a href="/home/self/user">我的关注</a></td>
            </div>
            <br><br>
            <div>
                <td><a href="/home/self/article">文章管理</a></td>
            </div>
            <br><br>

        </div>

        <div class="content-right">

            <div>
                <div>关于我</div>
                <p>自我介绍一下</p>
                <textarea disabled rows="7" cols="80" class="message">    来自重庆东南片区黔江的boy,生活中有时也是一个逗逼！小学、中学都是在这个美丽如画、山美、水美、人美的地方。我、爸妈与我姐组成了我们这个温馨的家庭，在他们的细心照料下我幸福、快乐的成长！现在我是重庆师范大学计算机信息与科学学院计算机科学与技术专业的新生，大学定能让我们学到许多有用的知识，由对计算机专业的不解到渐渐熟悉，它如同黑洞一样吞噬着我的好奇心，吸引人不断发现、探索，我相信天道酬勤！！！
            </textarea>
                <div>我感兴趣的</div>
                <textarea disabled rows="7" cols="80" class="message">    没什么特别爱好，如果说最特别的一定是吃这一系列的了！喜欢打篮球，玩游戏，不喜欢太吵太闹。  打球能让我全身心感到舒坦、放松、释放堆砌已久的情绪，同时还能够锻炼身体。打游戏就锻炼一下思维、放松自己！  还喜欢看看小说——武侠、仙侠、奇幻都看，-金古梁-经典。对历史类特别感兴趣，尤其是古传说，秦、三国、隋唐都喜欢！
            </textarea>
                <div>理想</div>
                <textarea disabled rows="5" cols="80" class="message">    计算机是个伟大、充满希望的行业，我将好好学习为后面打下基础，在IT大热的时代抓住改变命运的机会，在竞争日益变大的今天必须努力学习才能不被社会抛下，学好相关的专业知识不断开拓视野、增长见识。 我愿为此躬耕细琢！
            </textarea>
            </div>
        </div>
    </div>
    <div class="footer">
        <br>
        小小博客版权所有 2020-- 重庆师范大学-李小林 业务联系 QQ：1752116947  All Rights Reserved
    </div>
</div>
</body>
</html>

