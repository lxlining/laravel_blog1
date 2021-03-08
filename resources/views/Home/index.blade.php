<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body{
            background-image: url("{{'/images/bgc.png'}}");
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
        a{
            text-decoration: none;
        }
        .content{
            position: relative;

        }
        .left{
            width: 20%;
            height: 500px;
            background: url("{{'/images/left.png'}}") no-repeat fixed;
            background-size: cover;
            float: left;

        }
        .right{
            width: 80%;
            height: 100%;
            float: left;
            background: url("{{'/images/content.png'}}") no-repeat fixed;
            background-size: cover;
        }

        td{
            border: 1px solid black;
        }

        .message{
            padding: 10px;
            text-align:justify;
        }
        .style1{
            background-color:#B0E2FF;
            border: 1px solid grey;
        }
        .style2{
            background-color: #EDEDED;
            border: 1px solid blue;
        }

        .footer{
            width: 100%;
            height: 50px;
            float: left;
            text-align: center;
            background-size: cover;
        }

    </style>
    <style type="text/css">
        #pull_right{
            text-align:center;
        }
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
    </style>
</head>


<body>
<div class="container">
    <div class="banner">

    </div>
    <div class="nav">
        <li><a href="/home/">首页</a></li>
        <li><a href="/home/article">文章</a></li>
        <li><a href="/home/self">个人中心</a></li>
    </div>
    <div class="content">
        <div class="left">
            <td align="center" bgcolor="#FFFFFF">
                <?php
                    $user=session()->get('username');
                    //dd(session()->get('username'));
                if(session()->exists('username')){
                       // echo session()->get('username');
                    echo '当前用户：'.$user[0];

                    }else{
                    echo '未登录';
                }
                ?>
            </td>

            <td bgcolor="#FFFFFF">
                <?php
                if(session()->has('username')){
                        echo "<a href='/home/logout'>注销离开</a>";
                    }
                ?>
            </td>

            <div>
                <a href="/home/login">用户登录</a>
            </div>
            <br><br><br>
            <div class="link">
                &nbsp;&nbsp;&nbsp;&nbsp;<td>友情链接</td>
                <li><a href="https://www.runoob.com/php/php-tutorial.html">PHP菜鸟教程</a> </li>

                <li><a href="http://php.freehostingguru.com/">PHP中文手册</a> </li>
                <li><a href="https://www.w3school.com.cn/">W3C教程</a> </li>
                <li><a href="https://www.php.net/">PHP官网</a> </li>
            </div>
        </div>
        <div class="right">
            <div align="center">
                <br>

                    <form name="form1" method="post" action="/home/self/find">
                        <table>
                       <input type="text" name="key"/>
                        <input type="submit" value="搜索文章" >
                        </table>
                    </form>

                <br>

                <a href="/home/paginate">分页查看</a>
                <div>

                    <ol>
                       <li>
                           @foreach($article as $va)
                               <table border="0">
                                   <tr>
                                       <td>文章标题：<b>{{$va->title}}</b></td>
                                       <td>{{$va->created_at}}</td>
                                       <td>作者：{{$va->username}} </td>
                                   </tr>
                                   <tr>
                                       <textarea disabled="disabled" cols="80" rows="3">{{$va->content}}</textarea>
                                   </tr>
                               </table>
                           @endforeach

                       </li>
                    </ol>

                </div>
                <div>

                </div>
            </div>
            <br>

        </div>
    </div>
    <div class="footer">
        <br>
        小小博客版权所有 2020-- 重庆师范大学-李小林 业务联系 QQ：1752116947  All Rights Reserved
    </div>
</div>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>

</body>
</html>
