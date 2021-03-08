<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        table td,th {
            border: 1px solid #e5e5e5;
            padding: 8px;
        }
        .table{
            width: 100%;
            margin-left: 20%;
        }
    </style>
</head>
<body>

<div >
    <div class="table">
        <h1>文章列表</h1>
        <table>


            @foreach($aa['data'] as $key=>  $va)

                <table border="0">
                    <tr>
                        <td>文章标题：<b>{{$va["title"]}}</b></td>
                        <td>{{$va["created_at"]}}</td>
                        <td>作者： </td>
                    </tr>
                    <tr>
                        <textarea disabled="disabled" cols="80" rows="3">{{$va["content"]}}</textarea>
                    </tr>

                </table>
            @endforeach

        </table>
        {{$article -> links()}}
        <br/>
        <p><a href="/home">首页</a></p>
    </div>

</div>

</body>
</html>